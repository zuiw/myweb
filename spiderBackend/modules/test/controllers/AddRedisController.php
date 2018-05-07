<?php
/**
 *==============================================
 * Description
 *==============================================
 *
 * @FILE_NAME : AddRedisController.php
 * @PRODUCT: PhpStorm
 * @PROJECT: myweb
 * @author : zuiw
 * @MailAddr : mr.lintao@gmail.com
 * @copyright : Copyright (c) 2017 iamlintao.com
 * @DATE : 2018/4/28 15:56
 *
 *--------------------------------------------------------------------------------------------
 * @Mark :
 *
 *      -- 吧需要采集的文章列表放到redis里面去
 *
 *--------------------------------------------------------------------------------------------
 */

namespace app\modules\test\controllers;

use Yii;
use yii\console\Controller;
use app\models\SpWebContent;
use app\models\SpWebContentPage;


class AddRedisController extends Controller{

    /**
     * 吧 大数据思维 增加到 redis 中
     */
    public function actionIndex(){

        $i = 120; // 最大翻页
        $thisRule = '/<div class="thumb"><a href="(.*?)\"/is';  // 获取标题的正则
        $list = array();
        $k = 0; // 计数器


        $redis = Yii::$app->redis;
        for ($j=$i;$j>0;$j--){

            $url = "http://www.shuju.net/data-thinking-$j.html";
            $content = $this->getWebContent($url);
            preg_match_all($thisRule, $content, $url);

            foreach ($url[1] as $k=>$v){
                array_push($list,$v);

                $k++;
            }
        }
        array_unique($list);

        $list = json_encode($list);
        $redis->set('data-thinking-url',$list);

        echo $k;
    }

    //采集html
    function getWebContent($url){
        $ch = curl_init();
        $timeout = 10;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
        $contents = trim(curl_exec($ch));
        curl_close($ch);
        return $contents;
    }

}