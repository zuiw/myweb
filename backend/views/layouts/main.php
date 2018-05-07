<?php
/**
 *==============================================
 * Description
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

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>爬虫管理</title>
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/css.css" />
    <script type="text/javascript" src="/js/jquery1.9.0.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/sdmenu.js"></script>
    <script type="text/javascript" src="/js/laydate/laydate.js"></script>
</head>

<body>
<?php $this->beginBody() ?>

<div class="header">
    <div class="logo"><img  src="/img/logo.png" /></div>

    <div class="header-right">
        <i class="icon-question-sign icon-white"></i> <a href="#">帮助</a> <i class="icon-off icon-white"></i> <a id="modal-973558" href="#modal-container-973558" role="button" data-toggle="modal">注销</a> <i class="icon-user icon-white"></i> <a href="#">开票员的工作平台</a> <i class="icon-envelope icon-white"></i> <a href="#">发送短信</a>
        <div id="modal-container-973558" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:300px; margin-left:-150px; top:30%">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">
                    注销系统
                </h3>
            </div>
            <div class="modal-body">
                <p>
                    您确定要注销退出系统吗？
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button> <a class="btn btn-primary" style="line-height:20px;" href="登录.html" >确定退出</a>
            </div>
        </div>
    </div>
</div>
<!-- 顶部 -->

<div id="middle">
    <div class="left">

        <script type="text/javascript">
            var myMenu;
            window.onload = function() {
                myMenu = new SDMenu("my_menu");
                myMenu.init();
            };
        </script>

        <div id="my_menu" class="sdmenu">
            <div >
                <span>大数据之家</span>
                <a href="<?= Url::to(['/spider/spider-web/'])  ?>">采集站点</a>
                <a href="查询页面.html">采集起始页</a>
                <a href="分理处发货排行榜.html">已采集内容</a>
            </div>
            <div class="collapsed">
                <span>资金结算</span>
                <a href="#">提货登记</a>
            </div>
        </div>

    </div>
    <div class="Switch"></div>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $(".Switch").click(function(){
                $(".left").toggle();

            });
        });
    </script>

    <div class="right"  id="mainFrame">

        <div class="right_cont">
            <ul class="breadcrumb">当前位置：
                <a href="#">首页</a> <span class="divider">/</span>
                <a href="#">业务处理</a> <span class="divider">/</span>
                电脑开票
            </ul>

            <?= $content ?>

        </div>
    </div>
</div>

<!-- 底部 -->
<div id="footer">版权所有：北京八九十一信息技术有限公司 &copy; 2015&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" target="_blank">八九科技</a></div>

<script>
    !function(){
        laydate.skin('molv');
        laydate({elem: '#Calendar'});
        laydate.skin('molv');
        laydate({elem: '#Calendar2'});
    }();

</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

