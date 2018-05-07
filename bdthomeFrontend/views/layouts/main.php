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
use yii\helpers\Url;

//AppAsset::register($this);

$moduleName = $this->context->module->id;   // 模块名
$controllerName = $this->context->id;   // 控制器名称
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--STATUS OK-->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
    <html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php  echo isset($this->title)?Html::encode($this->title)."|大数据之家_让一部分先学会大数据":"大数据之家_让一部分先学会大数据"; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #3 for blog listing page"
              name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?= Yii::$app->request->hostInfo ?>/style/pages/css/blog.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?= Yii::$app->request->hostInfo ?>/style/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?= Yii::$app->request->hostInfo ?>/favicon.ico" />
        <?php $this->head() ?>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
    <?php $this->beginBody() ?>
    <div class="page-wrapper">
        <div class="page-wrapper-row">
            <div class="page-wrapper-top">
                <!-- BEGIN HEADER -->
                <div class="page-header">
                    <!-- BEGIN HEADER TOP -->
                    <div class="page-header-top">
                        <div class="container">
                            <!-- BEGIN LOGO -->
                            <div class="page-logo">
                                <a href="/">
                                    <img src="<?= Yii::$app->request->hostInfo ?>/images/logo.png" alt="logo" class="logo-default">
                                </a>
                            </div>
                            <!-- END LOGO -->

                        </div>
                    </div>
                    <!-- END HEADER TOP -->
                    <!-- BEGIN HEADER MENU -->
                    <div class="page-header-menu">
                        <div class="container">
                            <!-- BEGIN HEADER SEARCH BOX -->
                            <form class="search-form" action="page_general_search.html" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                </div>
                            </form>
                            <!-- END HEADER SEARCH BOX -->
                            <!-- BEGIN MEGA MENU -->
                            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                            <div class="hor-menu  ">
                                <ul class="nav navbar-nav">
                                    <li class="menu-dropdown classic-menu-dropdown active">
                                        <a href="<?= Url::to(['/']) ?>"> 首页
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <li class="menu-dropdown classic-menu-dropdown ">
                                        <a href="<?= Url::to(['/list/index','category'=>'zixun']) ?>"> 行业资讯
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <li class="menu-dropdown classic-menu-dropdown ">
                                        <a href="<?= Url::to(['/list/index','category'=>'yingyong']) ?>"> 数据应用
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <li class="menu-dropdown classic-menu-dropdown ">
                                        <a href="<?= Url::to(['/list/index','category'=>'jiaocheng']) ?>"> 教程聚合
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <li class="menu-dropdown classic-menu-dropdown ">
                                        <a href="<?= Url::to(['/website']) ?>">好站导航
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MEGA MENU -->
                        </div>
                    </div>
                    <!-- END HEADER MENU -->
                </div>
                <!-- END HEADER -->
            </div>
        </div>
        <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTAINER -->
                <?= $content ?>
                <!-- END CONTAINER -->
            </div>
        </div>
        <div class="page-wrapper-row">
            <div class="page-wrapper-bottom">
                <!-- BEGIN FOOTER -->
                <!-- BEGIN PRE-FOOTER -->
                <div class="page-prefooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                <h2>关于我</h2>
                                <p> 大数据爱好者，决定从PHP转行到大数据，热情、开源、激情是我们的宗旨。 </p>
                            </div>
                            <!-- div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                <h2>联系我</h2>
                                <div class="subscribe-form">
                                    <form action="javascript:;">
                                        <div class="input-group">
                                            <input type="text" placeholder="mail@email.com" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                        </div>
                                    </form>
                                </div>
                            </div -->
                            <!-- div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                <h2>Follow Us On</h2>
                                <ul class="social-icons">
                                    <li>
                                        <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                    </li>
                                </ul>
                            </div -->
                            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                <h2>联系我们</h2>
                                <address class="margin-bottom-40"> QQ群:<a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=f453e5915e2e6cb46b46d52da213e4d197ec062206ee7152d2d377ac5d42d4ad"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="大数据从入门到放弃" title="大数据从入门到放弃"></a>
                                    <br> Email:
                                    <a href="mailto:info@metronic.com"> </a>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRE-FOOTER -->
                <!-- BEGIN INNER FOOTER -->
                <div class="page-footer">
                    <div class="container"> 2016 &copy; Metronic Theme By
                        <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                        <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                    </div>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
                <!-- END INNER FOOTER -->
                <!-- END FOOTER -->
            </div>
        </div>
    </div>

    <!--[if lt IE 9]>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/respond.min.js"></script>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/excanvas.min.js"></script>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/ie8.fix.min.js"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?= Yii::$app->request->hostInfo ?>/style/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="<?= Yii::$app->request->hostInfo ?>/style/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="<?= Yii::$app->request->hostInfo ?>/style/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <?php $this->endBody() ?>

    <div style="display: none;">

        <script>
            var _hmt = _hmt || [];
            (function() {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?36f15872e7e0605f36998d8484af3e72";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>

        <script src="https://s11.cnzz.com/z_stat.php?id=1261136918&web_id=1261136918" language="JavaScript"></script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-90167654-1', 'auto');
            ga('send', 'pageview');

        </script>

    </div>

    </body>
    </html>
<?php $this->endPage() ?>