<?php
namespace bdthomeBackend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class IndexController extends Controller
{
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
       
       $redis = Yii::$app->redis;
        $redis->set('key','hello redis!!!');
        $value = $redis->get('key');
        echo $value;
        exit;

    }

}
