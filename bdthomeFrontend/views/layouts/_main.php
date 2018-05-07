<?php
/**
  *==============================================
  * Description
  *==============================================
  *
  * @FILE_NAME : ${FILE_NAME}
  * @author : zuiw
  * @MailAddr : mr.lintao@gmail.com
  * @copyright : Copyright (c) 2015 iamlintao.com
  * @DATE : ${DATE} ${TIME}
  * @Tutorial :
  *
  *--------------------------------------------------------------------------------------------
  * @todo :
  *--------------------------------------------------------------------------------------------
  */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

//AppAsset::register($this);

$moduleName = $this->context->module->id;   // 模块名
$controllerName = $this->context->id;   // 控制器名称
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--STATUS OK-->
<html lang="cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php  echo isset($this->title)?Html::encode($this->title)."_大数据之家":"大数据之家"; ?></title>
    <meta name="keywords" content="数据,大数据,大数据之家,大数据分析,大数据技术,大数据应用,大数据公司,大数据时代,大数据案例,数据科学家,数据可视化,数据分析,hadoop生态圈,爬虫">
    <meta name="description" content="大数据之家是一个专注大数据商业应用、大数据创业、大数据技术与生态的网站。分享大数据技术的干货教程和应用案例，提供大数据分析工具和资料下载，解读大数据行业最新动向">
    <link rel="shortcut icon" href="<?= Yii::$app->request->hostInfo ?>/images/favicon.ico">

    <link href="<?= Yii::$app->request->hostInfo ?>/css/common.css" type="text/css" rel="stylesheet"/>
    <link href="<?= Yii::$app->request->hostInfo ?>/css/new_contentplayer.css" rel="stylesheet" type="text/css"></link>
    <link href="<?= Yii::$app->request->hostInfo ?>/css/style.css" type="text/css" rel="stylesheet"/>

    <?php $this->head() ?>

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?36f15872e7e0605f36998d8484af3e72";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>
<body>
<?php $this->beginBody() ?>
<div id="header" alog-group="log-header">
    <div class="header-content">
        <div id="menu"><a href="http://www.thinkcss.com/" class="current">首页</a></div>
<!--        <div id="usrbar"><a href="#">百度新闻</a>|<a href="#">CSS5首页</a></div>-->
        <div class="top-main"><a href="#"><img src="<?= Yii::$app->request->hostInfo ?>/images/logo.png"/></a></div>
    </div>
</div>

<?= $content ?>

<div id="footer" alog-group="log-footer">
    <p class="site-nav"><a href="#" class="bottom-logo"><img src="images/baijia_logo_color.png"/></a><a href="#">互联网</a><a href="#">文化</a><a href="#">娱乐</a><a href="#">体育</a><a href="#">财经</a><a href="#">热点</a>
    </p>
    <p class="top-nav">
        <a href="#">百家首页</a>|
        <a href="#">百度新闻</a>|
        <a href="#">联系我们：Baijia@baidu.com</a>
        <strong> 百度新闻独家出品</strong>
    </p>
    <p class="site-info">
        京公网安备110000000001号 <a href="#">互联网新闻信息服务许可</a><span>&copy;2014 Baidu</span><a href="#">使用百度前必读</a><a href="#"><img src="images/net.gif"></a><a href="#"><img alt="首都网络110报警服务" src="images/110.gif"></a><a href="#"><img src="images/report_center.png"></a>
    </p>
</div>
<div class="log-wrapper" style="visibility:hidden;height:0;line-height:0;overflow:hidden">

</div>

<script type="text/javascript" src="<?= Yii::$app->request->hostInfo ?>/js/tangram-1.5.2.2.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= Yii::$app->request->hostInfo ?>/js/new_contentplayer_utf8.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->hostInfo ?>/js/usermonitor.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->hostInfo ?>/js/clickMonitor.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->hostInfo ?>/js/slide.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>