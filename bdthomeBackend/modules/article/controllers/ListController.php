<?php
/**
 *==============================================
 * Description 内容列表
 *==============================================
 *
 * @FILE_NAME : ListController.php
 * @author : zuiw
 * @MailAddr : mr.lintao@gmail.com
 * @copyright : Copyright (c) 2015 iamlintao.com
 * @DATE : 17/8/6 14:53
 * @Tutorial :
 *
 *--------------------------------------------------------------------------------------------
 * @todo :
 *--------------------------------------------------------------------------------------------
 */

namespace app\modules\article\controllers;

use yii;
use yii\web\Controller;
use yii\data\Pagination;
use yii\helpers\HtmlPurifier;
use yii\db\Command;
use app\models\Article;
use app\models\ArticleBody;
use app\models\ArticleLabel;
use app\models\ArticleCategory;
use app\models\ArticleLabelRelation;

class ListController extends Controller{

    public function actionIndex(){

        $data = Article::find()->where(['is_delete'=>'0'])->orderBy('id desc');
        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '10']);
        $_list = $data->offset($pages->offset)->limit($pages->limit)->all();

        $list = array();
        foreach ($_list as $k=>$v ) {
            $list[$k]['id']         = $v['id'];
            $list[$k]['title']      = $v['title'];
            $list[$k]['category']   = $this->getCategoryByArticleID($v['category_id']);
            $list[$k]['state']      = $v['state'];
            $list[$k]['is_delete']  = $v['is_delete'];
            $list[$k]['addtime']    = $v['addtime'];
        }


        return $this->render('index',['list'=>$list,'pages'=>$pages]);

    }

    /**
     * 由文章的id获取文章的ID
     * @param $id
     */
    public function getCategoryByArticleID($id){

        $category = ArticleCategory::find()->where(['id'=>$id])->one();
        return $category['cn_name'];
    }

}