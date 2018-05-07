<?php
/**
 *==============================================
 * Description  大数据观察 网的采集
 *==============================================
 *
 * @FILE_NAME : ShujuController.php
 * @PRODUCT: PhpStorm
 * @PROJECT: myspider
 * @author : zuiw
 * @MailAddr : mr.lintao@gmail.com
 * @copyright : Copyright (c) 2017 iamlintao.com
 * @DATE : 2018/3/7 01:19
 *
 *--------------------------------------------------------------------------------------------
 * @Mark :
 *
 *      采集实例地址：http://www.shuju.net/article/170663
 *
 *      定时任务执行命令：
 *              mac 下：  php /Users/zuiw/www/myweb/yii shuju/index
 *
 *      阿里云下的命令行执行：
 *           /alidata/server/php/bin/php /alidata/www/myweb/yii shuju/index
 * 
 *--------------------------------------------------------------------------------------------
 */

namespace console\controllers;

use Yii;
use yii\console\Controller;
use app\models\SpWebContent;
use app\models\SpWebContentPage;


class ShujuController extends Controller{

    public $webId = '2';    // sp_web 的主键

    /**
     * http://www.shuju.net/data-info-{1}.html
     */
    public function actionIndex()
    {

        $redis = Yii::$app->redis;
        $urlList = $value = $redis->get('data-thinking-url');
        $urlList = json_decode($urlList,true);



        foreach ($urlList as $k=>$v){

            $add = $this->spiderWebContent($v);

//            sleep(2);
        }


    }


    /**
     * 第一版的采集，由用户 他们更换了url的规则，放弃这个方式
     */
    public function actionIndexOld()
    {

        for ($i=0;$i<$this->maxSpiderNum;$i++){

            $lastUrl = SpWebContentPage::find()->where(['isDelet' => '0', 'webId' => $this->webId])->orderBy('id desc')->one();
            if (!empty($lastUrl)) {

                $thisUrl = substr($lastUrl['page_url'], 0, -6) . (substr($lastUrl['page_url'], -6) + 1);
            } else {
                $thisUrl = $this->startUrl;
            }

            $sourceCode = $this->getWebContent($thisUrl);

            // 查找标题
            preg_match('/<title>(.*?)<\/title>/is', $sourceCode, $title);
            $title = $title['1'];


            if ($title != "404 not fuond page") {

                // 查照内容部分
                preg_match('/<div class=\"content\">(.*?)<center>/is', $sourceCode, $content);
                $content = $content['1'];

                // 入库
                $addContent = new SpWebContent();
                $addContent->webId = $this->webId;
                $addContent->column = '';
                $addContent->title = $title;
                $addContent->keywords = '';
                $addContent->describe = '';
                $addContent->content = $content;
                $addContent->state = '0';
//                $addContent->createTime = time();
                if ($addContent->save()) {

                    $spiderState = '1';     // 采集成功

                } else {

                    $spiderState = '2'; // 采集失败

//                    var_dump("----- 1:" . $addContent->getErrors());
//                    exit;
                }
            }else{
                $spiderState = '3'; // 页面404
            }

            // 记录采集
            $page = new SpWebContentPage();
            $page->webId = $this->webId;
            $page->page_url = $thisUrl;
            $page->state = $spiderState;
//                $page->createTime = time();
            if ($page->save()) {

            } else {
//                    var_dump("----- 2:" . $page->getErrors());
//                    exit;
            }


            sleep(3);
        }

    }


    /**
     * 采集文章内容部分
     * 入库操作
     */
    function spiderWebContent($thisUrl){

        $ckUrl = SpWebContentPage::find()->where(['page_url'=>$thisUrl])->one();
        if (empty($ckUrl)){


            // 文章内容部分
            $sourceCode = $this->getWebContent($thisUrl);

            // 查找标题
            preg_match('/<title>(.*?)<\/title>/is', $sourceCode, $title);
            $title = $title['1'];


            if ($title != "404 not fuond page") {

                // 查照内容部分
                preg_match('/<div class=\"content\">(.*?)<center>/is', $sourceCode, $content);
                $content = $content['1'];

                // 入库
                $addContent = new SpWebContent();
                $addContent->webId = $this->webId;
                $addContent->column = '';
                $addContent->title = $title;
                $addContent->keywords = '';
                $addContent->describe = '';
                $addContent->content = $content;
                $addContent->state = '0';
                if ($addContent->save()) {

                    $spiderState = '1';     // 采集成功
                } else {

                    $spiderState = '2'; // 采集失败
                }
            }else{
                $spiderState = '3'; // 页面404
            }

            // 记录采集
            $page = new SpWebContentPage();
            $page->webId = $this->webId;
            $page->page_url = $thisUrl;
            $page->state = $spiderState;
            if ($page->save()) {

            } else {

            }
        }

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