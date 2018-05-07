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

namespace app\modules\website\controllers;

use app\models\Website;
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

        $data = Website::find()->where(['is_delete'=>'0'])->orderBy('jump_num desc');

        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '10']);
        $list = $data->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('index',['list'=>$list,'pages'=>$pages]);

    }


}