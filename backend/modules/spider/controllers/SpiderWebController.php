<?php
/**
 *==============================================
 * Description  采集站点
 *==============================================
 *
 * @FILE_NAME :
 * @PRODUCT:
 * @PROJECT:
 * @author : zuiw
 * @MailAddr : mr.lintao@gmail.com
 * @copyright : Copyright (c) 2017 iamlintao.com
 * @DATE : ${DATE} ${TIME}
 *
 *--------------------------------------------------------------------------------------------
 * @Mark :
 *
 *--------------------------------------------------------------------------------------------
 */

namespace spiderBackend\modules\spider\controllers;

use app\models\SpWeb;
use yii\web\Controller;

/**
 * Default controller for the `spider` module
 */
class SpiderWebController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $list = SpWeb::find()->where(['isDelet'=>'0'])->all();

        return $this->render('index',['list'=>$list]);
    }


    public function actionAdd(){

        // 提交
        if ($_SERVER['REQUEST_METHOD'] == "POST"){

            if (!isset($_POST['webName']) || empty($_POST['webName'])){
                echo '站点名不能为空';
            }

            if (!isset($_POST['webUrl']) || empty($_POST['webUrl'])){
                echo '站点地址不能为空';
            }

            $webName = $_POST['webName'];
            $webUrl = $_POST['webUrl'];
            $hostId = $_POST['hostId'];

            if ($hostId>0){ // 更新

                $spweb = SpWeb::findOne($hostId);
                $spweb->web_name = $webName;
                $spweb->web_url = $webUrl;
                if ($spweb->save()){
                    echo '<script>alert("修改成功");location.href="/spider/spider-web"</script>';
                }else{
                    var_dump($spweb->getErrors());
                    echo '<script>alert("修改失败");location.href="/spider/spider-web"</script>';
                }

            }else{

                $spweb = new SpWeb();
                $spweb->web_name = $webName;
                $spweb->web_url = $webUrl;
                $spweb->web_host = 'bdthome';
                if ($spweb->save()){
                    echo '<script>alert("添加成功");location.href="/spider/spider-web"</script>';
                }else{
                    var_dump($spweb->getErrors());
                    echo '<script>alert("添加失败");location.href="/spider/spider-web"</script>';
                }

            }


        }

    }


}