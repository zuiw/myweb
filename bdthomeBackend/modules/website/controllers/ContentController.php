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

namespace app\modules\website\controllers;

use yii;
use yii\web\Controller;
use yii\data\Pagination;
use yii\helpers\HtmlPurifier;
use yii\helpers\ZuiwGlobalFunctions;
use yii\db\Command;
use app\models\Website;
use app\models\WebsiteCategory;

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
     * 站点添加
     * @return string
     */
    public function actionAdd(){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $title  = $_POST['title'];      // 标题
            $url = $_POST['url'];           // 网址
            $category = $_POST['category']; // 分类
            $describe = $_POST['describe']; // 描述
//            $content   = $_POST['body'];       // 内容


            // 检查网址是否存在
            $ck = Website::find()->where(['url'=>$url])->one();
            if (empty($ck)){

                // 图片保存 start

                $headPicSave = "";  // 头图路径

//            $picSavePath = Yii::$app->params['uploadPicSavePath'];  // 图片保存本地路径
//
//            $headPic = ZuiwGlobalFunctions::getContentTopPic($content); // 头图
//            $headPicSave = ZuiwGlobalFunctions::picSaveToLocal($headPic,$picSavePath);  // 头图保存路径
//            $headPicSave = $headPicSave['save_path'];

                // 图片保存 end


                $website = new Website();
                $website->category_id = $category;
                $website->title = $title;
                $website->url = $url;
                $website->description = $describe;
                $website->top_pic = $headPicSave;
                $website->addtime = time();
                if($website->save()){

                    $articleID = $website->id;

                    echo '<script>alert("添加成功");location.href="/website/content/add"</script>';
                }else{
//                var_dump($article->getErrors()); exit();
                    echo '<script>alert("添加失败");location.href="/website/content/add"</script>';
                }

            }else{
                echo '<script>alert("站点已存在");location.href="/website/content/add"</script>';
            }

        }

        // 分类
        $category = $this->getCategory();

        return $this->render('add',['category'=>$category]);
    }


    /**
     * 编辑内容
     */
    public function actionEdit(){

        if (!isset($_GET['id']) || empty($_GET['id'])) {
            echo "ID error";
        }

        $id = $_GET['id'];

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $title  = $_POST['title'];      // 标题
            $url = $_POST['url'];           // 地址
            $label  = $_POST['label'];      // 标签
            $category = $_POST['category']; // 分类
            $describe = $_POST['describe']; // 描述
            $content   = $_POST['body'];       // 内容

            $ck = Website::find()->where(['url'=>$url])->one();
            if (empty($ck)){


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

                $article = Article::findOne($id);
                $article->category_id = $category;
                $article->title = $title;
                $article->tags = $labelId;
                $article->description = $describe;
                $article->top_pic = $headPicSave;
                $article->addtime = time();
                if($article->save()){

                    // 增加文章和标签关系
                    $this->addArticleLabelRelation($id,$labelId);

                    // 编辑内容
                    $connection = Yii::$app->db;
                    $upContent = $connection->createCommand("update  article_body set article_content='$newContent' where  article_id='$id'  ");

                    if($upContent->execute()){
                        echo '<script>alert("修改成功");location.href="/article/list"</script>';
                    }else{
//                    var_dump($body->getErrors());
                        echo '<script>alert("内容修改失败");location.href="article/content/edit?id='.$id.'"</script>';
                    }

                }else{
                    var_dump($article->getErrors());
                    echo '<script>alert("修改失败");location.href="article/content/add"</script>';
                }

            }else{

                echo '<script>alert("站点已存在");location.href="article/content/add"</script>';
            }


        }

        $article = Article::find()->where(['id'=>$id])->one();
        $body = ArticleBody::find()->where(['article_id'=>$id])->one();

        $category = $this->getCategory();   // 获取分类

        $label = $this->getArticleLabel($id);   // 获取标签

        return $this->render("edit",['category'=>$category,"article"=>$article,"body"=>$body,"label"=>$label]);
    }

    /**
     * 删除内容（逻辑删除）
     */
    public function actionDel(){


    }



    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    /**
     * 分类列表
     *
     * @param int $id 分类id
     */
    public function getCategory($id=0){

        $list = array();
        $_list = WebsiteCategory::find()->where(['is_delete'=>0,'parent_id'=>$id])->all();

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


}