<?php
/**
 *==============================================
 * Description   文章内容
 *==============================================
 *
 * @FILE_NAME : ContentController.php
 * @author : zuiw
 * @MailAddr : mr.lintao@gmail.com
 * @copyright : Copyright (c) 2015 iamlintao.com
 * @DATE : 17/7/4 00:45
 * @Tutorial :
 *
 *--------------------------------------------------------------------------------------------
 * @todo :
 *--------------------------------------------------------------------------------------------
 */


namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\ZController;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use app\models\Article;
use app\models\ArticleLabel;
use app\models\ArticleBody;

/**
 * Site controller
 */
class ContentController extends ZController
{

    public function actionIndex(){

        if (!isset($_GET['id']) || empty($_GET['id'])) {
            echo "ID error";
        }

        $id = $_GET['id'];
        $article = Article::find()->andWhere(['id'=>$id,'is_delete'=>'0'])->one();
        if ($article) {

            // 增加访问量
            $this->addArticleVsits($article['id']);

            // 文章标签
            if (!empty($article['tags'])) {
                $tagsId = $article['tags'];
                $tags = ArticleLabel::findBySql(" select * from article_label WHERE id in ($tagsId)")->all();
            }else{
                $tags = array();
            }

            $content = ArticleBody::find()->where(['article_id'=>$article['id']])->one();

            // 标题
            $this->getView()->title = $article['title'];


            // 获取标签列表
            $articleList = $this->getArticleLabel();

            return $this->render("index",['article'=>$article,'tags'=>$tags,'content'=>$content,'articleList'=>$articleList]);

        }else{
            echo "is null";
        }

    }


    /**
     * 增加文章访问数据
     */
    public function addArticleVsits($articleID){

        $connection = Yii::$app->db;
        $connection->createCommand(" update article set vsits=vsits+1 WHERE id='$articleID' ")->query();
    }

}