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
use yii\helpers\GlobalFunctions;
use yii\helpers\Url;

//$this->title = 'Java大数据教学团队';
//
//// 课程大纲内容
//$this->registerJsFile('@web/style/global/plugins/bootbox/bootbox.min.js',['position' => \yii\web\View::POS_END]);
//$this->registerJsFile('@web/style/pages/scripts/ui-bootbox.min.js',['position' => \yii\web\View::POS_END]);
//
//
//AppAsset::register($this);

?>
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- END THEME LAYOUT STYLES -->

<!-- END HEAD -->
</head>

<div class="page-wrapper">

    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->



                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">

                        <!-- BEGIN PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-social-dribbble font-blue-sharp"></i>
                                    <span class="caption-subject font-blue-sharp bold uppercase">Bootbox Demo</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-hover table-striped table-bordered">
                                    <tr>
                                        <td> Basic alert example </td>
                                        <td>
                                            <a class="btn blue btn-outline sbold uppercase" id="demo_1"> View Demo </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Alert with callback </td>
                                        <td>
                                            <a class="btn red btn-outline sbold uppercase" id="demo_2"> View Demo </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Confirm example </td>
                                        <td>
                                            <a class="btn yellow btn-outline sbold uppercase" id="demo_3"> View Demo </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Promt example </td>
                                        <td>
                                            <a class="btn green btn-outline sbold uppercase" id="demo_4"> View Demo </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Advance dialog </td>
                                        <td>
                                            <a class="btn dark btn-outline sbold uppercase" id="demo_5"> View Demo </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->

</div>


<!-- BEGIN CORE PLUGINS -->
<script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?= Yii::$app->request->hostInfo ?>/style/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= Yii::$app->request->hostInfo ?>/style/pages/scripts/ui-bootbox.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->



</html>