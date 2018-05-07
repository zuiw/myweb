<?php
/**
 *==============================================
 * Description  文章内容
 *==============================================
 *
 * @FILE_NAME : ContentController.php
 * @author : zuiw
 * @MailAddr : mr.lintao@gmail.com
 * @copyright : Copyright (c) 2015 iamlintao.com
 * @DATE : 17/7/24 00:50
 * @Tutorial :
 *
 *--------------------------------------------------------------------------------------------
 * @todo :
 *--------------------------------------------------------------------------------------------
 */

namespace app\modules\spider\controllers;

use yii;
use yii\web\Controller;
use yii\data\Pagination;
use yii\helpers\HtmlPurifier;
use yii\helpers\ZuiwGlobalFunctions;
use app\models\ArticleCategory;
use app\models\SpWebContent;
use app\models\Article;
use app\models\ArticleLabelRelation;
use app\models\ArticleBody;
use app\models\ArticleLabel;

use yii\db\Command;

class ContentController extends Controller{

    public function actions(){
        return [
            'ueditor'=>[
                'class' => 'common\widgets\ueditor\UeditorAction',
                'config'=>[
                    //上传图片配置
                    'imageUrlPrefix' => "", /* 图片访问路径前缀 */
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
                ]
            ]
        ];
    }


    /**
     * 编辑发布内容
     */
    public function actionEditPush(){

        if (!isset($_GET['id']) || empty($_GET['id'])) {
            echo "ID error";
        }

        $id = $_GET['id'];

        // 提交
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $_ck = Article::find()->where(['title'=>$_POST['title']])->one();
            if (empty($_ck)){

                $thisId = $_POST['thisid'];
                $title  = $_POST['title'];      // 标题
                $label  = $_POST['label'];      // 标签
                $category = empty($_POST['category'])?'0':$_POST['category'];// 分类
                $describe = empty($_POST['describe'])?$_POST['title']:$_POST['describe']; // 描述
                $content   = $_POST['body'];       // 内容

                $labelId = "";
                if(!empty($label)){
                    $labelId = $this->articleAndLabel($label);
                    if($labelId[0]){
                        $labelId = $labelId[1]; // 标签id
                    }
                }


                // 图片保存 start

                $headPicSave = "";  // 头图路径

                $picSavePath = Yii::$app->params['uploadPicSavePath'];  // 图片保存本地路径

                $headPic = ZuiwGlobalFunctions::getContentTopPic($content); // 头图
                $headPicSave = ZuiwGlobalFunctions::picSaveToLocal($headPic,$picSavePath);  // 头图保存路径
                $headPicSave = $headPicSave['save_path'];


                // 所有图片保存
                $allPic = ZuiwGlobalFunctions::getContentPic($content); // 网站的所有图片
                $allPicLocalPath = $this->allPicSaveLocal($allPic,$picSavePath);
                $newContent = str_replace($allPic,$allPicLocalPath,$content);

                // 图片保存 end

                // 判断，如果图片保存失败，则内容中的图片不用更换成本地的
                if(empty($headPicSave)){
                    $newContent = $content;
                }

                $article = new Article();
                $article->category_id = $category;
                $article->title = $title;
                $article->tags = $labelId;
                $article->description = $describe;
                $article->top_pic = $headPicSave;
                $article->addtime = time();
                if($article->save()){

                    $articleID = $article->id;

                    // 增加文章和标签关系
                    $this->addArticleLabelRelation($articleID,$labelId);

                    // 增加文章内容
                    $body = new ArticleBody();
                    $body->article_id = $articleID;
                    $body->article_content = $newContent;
                    if($body->save()){

                        // 更新状态，标注已发布
                        $upSpiderContent = SpWebContent::findOne($thisId);
                        $upSpiderContent->state = '1';
                        if ($upSpiderContent->save()){

                        }else{
                            echo '<script>alert("更新发布状态失败");location.href="/spider"</script>';

                        }

                        echo '<script>alert("发布成功");location.href="/spider"</script>';
                    }else{
//                    var_dump($body->getErrors());
                        echo '<script>alert("发布失败");location.href="/spider"</script>';
                    }

                }else{
                    var_dump($_POST);var_dump($article->getErrors());exit;
                    echo '<script>alert("发布失败1");location.href="/spider"</script>';
                }
            }else{

                echo '<script>alert("标题已经存在");location.href="/spider"</script>';


            }

        }

        // 内容
        $article = SpWebContent::find()->where(['id'=>$id])->one();
        $category = $this->getCategory();   // 获取分类

        // 截取简介
        $desc = strip_tags($article['content']);//去除html标签
        $pattern = '/\s/';//去除空白
        $content = preg_replace($pattern, '', $desc);
        $desc= mb_substr($content, 0, 630);//截取21个汉字

        return $this->render("edit",['category'=>$category,"article"=>$article,'desc'=>$desc]);
    }

    /**
     * 删除内容（逻辑删除）
     */
    public function actionDel(){


    }



    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * @param $articleID 获取文章的标签
     */
    public function getArticleLabel($articleID){

        $labels = "";
        $labelsID = ArticleLabelRelation::find()->where(['article_id'=>$articleID])->all();
        foreach($labelsID as $k=>$v){
            $_label = ArticleLabel::find()->where(['id'=>$v['label_id'],'isdelete'=>'0'])->one();
            $labels .= $_label['name'].',';
        }

        return $labels;
    }

    /**
     * 文章增加标签，返回状态和标签id（true、false）
     *
     *  - 参数值：标签1,标签2,标签3,
     *  - 参数用英文,分割或者空格分割
     *
     * - 默认操作为添加，操作可以有添加、删除、编辑（先删除后添加）
     * - 存在对应关系则忽略，不存在则添加
     */
    public function articleAndLabel($labels){

        if(!empty($labels)){

            $labels = str_replace(" ",",",$labels);
            $labelArray = explode(",",$labels);

            $ids = "";
            foreach($labelArray as $k=>$v){

                $ck = ArticleLabel::find()->where(['name'=>$v])->one();
                if(empty($ck)){

                    $_label = new ArticleLabel();
                    $_label->name = $v;
                    if($_label->save()){
                        $ids .= $_label->id.",";
                    }
                }else{
                    $ids .= $ck['id'].",";
                }
            }
            $ids = substr($ids,0,-1);
            return array(true,$ids);
        }else{
            return array(false);
        }
    }


    /**
     * 添加文章和标签的关系
     *  - 先删除，后增加
     *  - 参数：文章id，标签id ，例如： “123”，“12,3,34”
     */
    public function addArticleLabelRelation($articleID,$labelsID){

        // 删除对应关系
        ArticleLabelRelation::deleteAll(['article_id'=>$articleID]);

        // 增加对应关系
        $labelIdArray = explode(",",$labelsID);
        foreach ($labelIdArray as $k=>$v ) {
            $ck = ArticleLabelRelation::find()->where(['label_id'=>$v,'article_id'=>$articleID])->one();
            if(empty($ck)){
                $ins = new ArticleLabelRelation();
                $ins->label_id = $v;
                $ins->article_id = $articleID;
                $ins->save();
            }
        }

    }


    /**
     * 分类列表
     *
     * @param int $id 分类id
     */
    public function getCategory($id=0){

        $list = array();
        $_list = ArticleCategory::find()->where(['is_delete'=>0,'parent_id'=>$id])->all();

        foreach($_list as $k=>$v){
            $list[$k]['id'] = $v['id'];
            $list[$k]['parent_id'] = $v['parent_id'];
            $list[$k]['cn_name'] = $v['cn_name'];
            $list[$k]['en_name'] = $v['en_name'];
            $list[$k]['son'] = $this->getCategory($v['id']);
        }

        return $list;
    }


    /** 图片（数组格式）保存到本地
     * @param $picArray 图片
     * @param $savePath 本地路径
     * @return array 返回图片保存路径的数组
     */
    public function allPicSaveLocal($picArray,$savePath){

        $saveArray = array();

        if(is_array($picArray)){

            foreach($picArray as $k => $v){

               $saveInfo = ZuiwGlobalFunctions::picSaveToLocal($v,$savePath);
                $saveArray[$k] = $saveInfo['save_path'];

            }
        }

        return $saveArray;
    }


//    /** 获取内容的第一章图片 */
//    public function getTopPic($content){
//        preg_match_all("#<img.*\>#isU",$content,$ereg);//先通过正则匹配出来所有的
//        $img=$ereg[0][0];//这里返回匹配到的数组
//
//        preg_match_all ("#src=('|\")(.*)('|\")#isU", $img, $img1); //使用正则获取所有图片地址
//        $img_path =$img1[2][0];//获取第一张图片路径
//
//        $img_info = $this->myGetImageSize($img_path);
//        var_dump($img_info);
//        exit;
//
//        return $img_path;
//
//    }


    /**
     * 获取远程图片的宽高和体积大小
     *
     * @param string $url 远程图片的链接
     * @param string $type 获取远程图片资源的方式, 默认为 curl 可选 fread
     * @param boolean $isGetFilesize 是否获取远程图片的体积大小, 默认false不获取, 设置为 true 时 $type 将强制为 fread
     * @return false|array
     */
//    public function myGetImageSize($url, $type = 'curl', $isGetFilesize = false)
//    {
//        // 若需要获取图片体积大小则默认使用 fread 方式
//        $type = $isGetFilesize ? 'fread' : $type;
//
//        if ($type == 'fread') {
//            // 或者使用 socket 二进制方式读取, 需要获取图片体积大小最好使用此方法
//            $handle = fopen($url, 'rb');
//
//            if (! $handle) return false;
//
//            // 只取头部固定长度168字节数据
//            $dataBlock = fread($handle, 168);
//        }
//        else {
//            // 据说 CURL 能缓存DNS 效率比 socket 高
//            $ch = curl_init($url);
//            // 超时设置
//            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
//            // 取前面 168 个字符 通过四张测试图读取宽高结果都没有问题,若获取不到数据可适当加大数值
//            curl_setopt($ch, CURLOPT_RANGE, '0-167');
//            // 跟踪301跳转
//            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//            // 返回结果
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//            $dataBlock = curl_exec($ch);
//
//            curl_close($ch);
//
//            if (! $dataBlock) return false;
//        }
//
//        // 将读取的图片信息转化为图片路径并获取图片信息,经测试,这里的转化设置 jpeg 对获取png,gif的信息没有影响,无须分别设置
//        // 有些图片虽然可以在浏览器查看但实际已被损坏可能无法解析信息
//        $size = getimagesize('data://image/jpeg;base64,'. base64_encode($dataBlock));
//        if (empty($size)) {
//            return false;
//        }
//
//        $result['width'] = $size[0];
//        $result['height'] = $size[1];
//
//        // 是否获取图片体积大小
//        if ($isGetFilesize) {
//            // 获取文件数据流信息
//            $meta = stream_get_meta_data($handle);
//            // nginx 的信息保存在 headers 里，apache 则直接在 wrapper_data
//            $dataInfo = isset($meta['wrapper_data']['headers']) ? $meta['wrapper_data']['headers'] : $meta['wrapper_data'];
//
//            foreach ($dataInfo as $va) {
//                if ( preg_match('/length/iU', $va)) {
//                    $ts = explode(':', $va);
//                    $result['size'] = trim(array_pop($ts));
//                    break;
//                }
//            }
//        }
//
//        if ($type == 'fread') fclose($handle);
//
//        return $result;
//    }

}