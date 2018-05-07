<?php
/**
 *==============================================
 * Description  文章分类
 *==============================================
 *
 * @FILE_NAME : CategoryController.php
 * @author : zuiw
 * @MailAddr : mr.lintao@gmail.com
 * @copyright : Copyright (c) 2015 iamlintao.com
 * @DATE : 17/7/3 01:05
 * @Tutorial :
 *
 *--------------------------------------------------------------------------------------------
 * @todo :
 *
 *      use yii\helpers\HtmlPurifier;
 *
 *      $id = HtmlPurifier::process($_GET['classroomId']); // 过滤
 *--------------------------------------------------------------------------------------------
 */

namespace app\modules\article\controllers;


use yii;
use yii\web\Controller;
use yii\data\Pagination;
use yii\helpers\HtmlPurifier;
use yii\db\Command;
use app\models\ArticleCategory;

class CategoryController extends Controller{

    public $enableCsrfValidation = false;

    public function actionIndex(){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $parentID = $_POST['parentID'];
            $cnName = $_POST['cnName'];
            $enName = $_POST['enName'];
            $isShow = $_POST['isShow'];

            $ck = ArticleCategory::find()->where("cn_name=:cnName",array(":cnName"=>$cnName))->one();
            if(!empty($ck)) {
                echo '<script>alert("中文名或代码已存在");location.href="/article/category"</script>';
                exit;
            }

            $ck = ArticleCategory::find()->where("en_name=:enName",array(":enName"=>$enName))->one();
            if(!empty($ck)) {
                echo '<script>alert("中文名或代码已存在");location.href="/article/category"</script>';
                exit;
            }

            $category = new ArticleCategory();
            $category->parent_id = $parentID;
            $category->cn_name = $cnName;
            $category->en_name = $enName;
            $category->state = $isShow;
            if ($category->save()) {
                echo '<script>alert("添加成功");location.href="/article/category"</script>';
            } else {
                echo '<script>alert("添加失败");location.href="/article/category"</script>';
            }

        }

        $data = ArticleCategory::find()->where(['is_delete'=>0]);
        $pages = new Pagination(['totalCount'=>$data->count(),'pageSize'=>10]);
        $list = $data->offset($pages->offset)->limit($pages->limit)->all();

        $category = $this->getCategory();

        return $this->render('index',['list'=>$list,'pages'=>$pages,'category'=>$category]);
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

}
