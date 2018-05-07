<?php
/**
 *==============================================
 * Description
 *==============================================
 *
 * @FILE_NAME : ListController.php
 * @author : zuiw
 * @MailAddr : mr.lintao@gmail.com
 * @copyright : Copyright (c) 2015 iamlintao.com
 * @DATE : 17/9/12 00:46
 * @Tutorial :
 *
 *--------------------------------------------------------------------------------------------
 * @todo :
 *--------------------------------------------------------------------------------------------
 */

namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\ZController;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Article;
use app\models\ArticleLabel;
use app\models\ArticleCategory;

/**
 * Site controller
 */
class ListController extends ZController
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        if(isset($_GET['category']) && !empty($_GET['category'])){

            $category = ArticleCategory::find()->where(['en_name'=>$_GET['category'],'state'=>'1','is_delete'=>'0'])->one();
            if(!empty($category['id'])){

                $categoryID = $category['id'];

                $data = Article::find()->where(['is_delete'=>'0','category_id'=>$categoryID])->orderBy('id desc');
                $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '10']);
                $_list = $data->offset($pages->offset)->limit($pages->limit)->all();

                $list = array();
                foreach ($_list as $k=>$v ) {
                    $list[$k]['id'] = $v['id'];
                    $list[$k]['title'] = $v['title'];
                    $list[$k]['description'] = $v['description'];
                    $list[$k]['vsits'] = $v['vsits'];
                    $list[$k]['addtime'] = date("Y-m-d", $v['addtime']);

                    if (!empty($v['tags'])) {
                        $tagsId = $v['tags'];
                        $list[$k]['tags'] = ArticleLabel::findBySql(" select * from article_label WHERE id in ($tagsId)")->all();
                    }else{
                        $list[$k]['tags'] = array();
                    }
                }

                // 获取标签列表
                $articleList = $this->getArticleLabel();

                return $this->render('index',['list'=>$list,'pages'=>$pages,'articleList'=>$articleList]);


            }else{

                echo "分类错误";

            }

        }else{

            echo '分类错误.';

        }

    }

}