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
use yii\widgets\Breadcrumbs;
use bdthomeBackend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
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
        <title>管理后台 | 大数据之家</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #1 for bootstrap modal dialogs"
            name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
<!--        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />-->
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <?php $this->head(); ?>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?= Yii::$app->request->hostInfo ?>/style/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?= Yii::$app->request->hostInfo ?>/style/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?= Yii::$app->request->hostInfo ?>/favicon.ico" />
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <?php $this->endBody() ?>
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="../assets/layouts/layout/img/avatar3_small.jpg" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app_todo.html">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="page_user_lock_1.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="page_user_login_1.html">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                            <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                    <a href="javascript:;" class="remove">
                                        <i class="icon-close"></i>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            <li class="nav-item start active open">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">首页</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item start active open">
                                        <a href="/" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">网站统计</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">-=-内容-=-</h3>
                            </li>
<!--                            <li class="nav-item  ">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class="icon-layers"></i>-->
<!--                                    <span class="title">采集</span>-->
<!--                                    <span class="arrow"></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_blank_page.html" class="nav-link ">-->
<!--                                            <span class="title">内容采集</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_boxed_page.html" class="nav-link ">-->
<!--                                            <span class="title">采集&未添加</span>-->
<!--                                            <span class="badge badge-danger">2</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">文章</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?= Url::to(['/article/content/add']) ?>" class="nav-link ">
                                            <span class="title">写文章</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?= Url::to(['/article/list']) ?>" class="nav-link ">
                                            <span class="title">所有文章</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_boxed_page.html" class="nav-link ">
                                            <span class="title">未发布</span>
                                            <span class="badge badge-danger">2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">站点</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?= Url::to(['/website/content/add']) ?>" class="nav-link ">
                                            <span class="title">增加站点</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?= Url::to(['/website/list']) ?>" class="nav-link ">
                                            <span class="title">所有站点</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">分类</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?= Url::to(['/article/category']) ?>" class="nav-link ">
                                            <span class="title">内容分类</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?= Url::to(['/website/category']) ?>" class="nav-link ">
                                            <span class="title">站点分类</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="heading">
                                <h3 class="uppercase">-=-运营-=-</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="/spider" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">已采集内容</span>
                                    <span class="arrow"></span>
                                </a>
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_blank_page.html" class="nav-link ">-->
<!--                                            <span class="title">Blank Page</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_ajax_page.html" class="nav-link ">-->
<!--                                            <span class="title">Ajax Content Layout</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_offcanvas_mobile_menu.html" class="nav-link ">-->
<!--                                            <span class="title">Off-canvas Mobile Menu</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_classic_page_head.html" class="nav-link ">-->
<!--                                            <span class="title">Classic Page Head</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_light_page_head.html" class="nav-link ">-->
<!--                                            <span class="title">Light Page Head</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_content_grey.html" class="nav-link ">-->
<!--                                            <span class="title">Grey Bg Content</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_search_on_header_1.html" class="nav-link ">-->
<!--                                            <span class="title">Search Box On Header 1</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_search_on_header_2.html" class="nav-link ">-->
<!--                                            <span class="title">Search Box On Header 2</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_language_bar.html" class="nav-link ">-->
<!--                                            <span class="title">Header Language Bar</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_footer_fixed.html" class="nav-link ">-->
<!--                                            <span class="title">Fixed Footer</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_boxed_page.html" class="nav-link ">-->
<!--                                            <span class="title">Boxed Page</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
                            </li>
<!--                            <li class="nav-item  ">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class="icon-feed"></i>-->
<!--                                    <span class="title">工具栏样式</span>-->
<!--                                    <span class="arrow"></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_sidebar_menu_light.html" class="nav-link ">-->
<!--                                            <span class="title">Light Sidebar Menu</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_sidebar_menu_hover.html" class="nav-link ">-->
<!--                                            <span class="title">Hover Sidebar Menu</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_sidebar_search_1.html" class="nav-link ">-->
<!--                                            <span class="title">Sidebar Search Option 1</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_sidebar_search_2.html" class="nav-link ">-->
<!--                                            <span class="title">Sidebar Search Option 2</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_toggler_on_sidebar.html" class="nav-link ">-->
<!--                                            <span class="title">Sidebar Toggler On Sidebar</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_sidebar_reversed.html" class="nav-link ">-->
<!--                                            <span class="title">Reversed Sidebar Page</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_sidebar_fixed.html" class="nav-link ">-->
<!--                                            <span class="title">Fixed Sidebar Layout</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_sidebar_closed.html" class="nav-link ">-->
<!--                                            <span class="title">Closed Sidebar Layout</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="nav-item  ">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class="icon-paper-plane"></i>-->
<!--                                    <span class="title">横向菜单</span>-->
<!--                                    <span class="arrow"></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_mega_menu_light.html" class="nav-link ">-->
<!--                                            <span class="title">Light Mega Menu</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_mega_menu_dark.html" class="nav-link ">-->
<!--                                            <span class="title">Dark Mega Menu</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_full_width.html" class="nav-link ">-->
<!--                                            <span class="title">Full Width Layout</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="nav-item  ">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class=" icon-wrench"></i>-->
<!--                                    <span class="title">自定义布局</span>-->
<!--                                    <span class="arrow"></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_disabled_menu.html" class="nav-link ">-->
<!--                                            <span class="title">Disabled Menu Links</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_full_height_portlet.html" class="nav-link ">-->
<!--                                            <span class="title">Full Height Portlet</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="layout_full_height_content.html" class="nav-link ">-->
<!--                                            <span class="title">Full Height Content</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="heading">-->
<!--                                <h3 class="uppercase">-=-广告-=-</h3>-->
<!--                            </li>-->
<!--                            <li class="nav-item  ">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class="icon-basket"></i>-->
<!--                                    <span class="title">电子商务</span>-->
<!--                                    <span class="arrow"></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="ecommerce_index.html" class="nav-link ">-->
<!--                                            <i class="icon-home"></i>-->
<!--                                            <span class="title">Dashboard</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="ecommerce_orders.html" class="nav-link ">-->
<!--                                            <i class="icon-basket"></i>-->
<!--                                            <span class="title">Orders</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="ecommerce_orders_view.html" class="nav-link ">-->
<!--                                            <i class="icon-tag"></i>-->
<!--                                            <span class="title">Order View</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="ecommerce_products.html" class="nav-link ">-->
<!--                                            <i class="icon-graph"></i>-->
<!--                                            <span class="title">Products</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="ecommerce_products_edit.html" class="nav-link ">-->
<!--                                            <i class="icon-graph"></i>-->
<!--                                            <span class="title">Product Edit</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="nav-item  ">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class="icon-docs"></i>-->
<!--                                    <span class="title">应用</span>-->
<!--                                    <span class="arrow"></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="app_todo.html" class="nav-link ">-->
<!--                                            <i class="icon-clock"></i>-->
<!--                                            <span class="title">Todo 1</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="app_todo_2.html" class="nav-link ">-->
<!--                                            <i class="icon-check"></i>-->
<!--                                            <span class="title">Todo 2</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="app_inbox.html" class="nav-link ">-->
<!--                                            <i class="icon-envelope"></i>-->
<!--                                            <span class="title">Inbox</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="app_calendar.html" class="nav-link ">-->
<!--                                            <i class="icon-calendar"></i>-->
<!--                                            <span class="title">Calendar</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="app_ticket.html" class="nav-link ">-->
<!--                                            <i class="icon-notebook"></i>-->
<!--                                            <span class="title">Support</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="nav-item  ">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class="icon-user"></i>-->
<!--                                    <span class="title">用户</span>-->
<!--                                    <span class="arrow"></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_user_profile_1.html" class="nav-link ">-->
<!--                                            <i class="icon-user"></i>-->
<!--                                            <span class="title">Profile 1</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_user_profile_1_account.html" class="nav-link ">-->
<!--                                            <i class="icon-user-female"></i>-->
<!--                                            <span class="title">Profile 1 Account</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_user_profile_1_help.html" class="nav-link ">-->
<!--                                            <i class="icon-user-following"></i>-->
<!--                                            <span class="title">Profile 1 Help</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_user_profile_2.html" class="nav-link ">-->
<!--                                            <i class="icon-users"></i>-->
<!--                                            <span class="title">Profile 2</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                            <i class="icon-notebook"></i>-->
<!--                                            <span class="title">Login</span>-->
<!--                                            <span class="arrow"></span>-->
<!--                                        </a>-->
<!--                                        <ul class="sub-menu">-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_user_login_1.html" class="nav-link " target="_blank"> Login Page 1 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_user_login_2.html" class="nav-link " target="_blank"> Login Page 2 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_user_login_3.html" class="nav-link " target="_blank"> Login Page 3 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_user_login_4.html" class="nav-link " target="_blank"> Login Page 4 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_user_login_5.html" class="nav-link " target="_blank"> Login Page 5 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_user_login_6.html" class="nav-link " target="_blank"> Login Page 6 </a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_user_lock_1.html" class="nav-link " target="_blank">-->
<!--                                            <i class="icon-lock"></i>-->
<!--                                            <span class="title">Lock Screen 1</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_user_lock_2.html" class="nav-link " target="_blank">-->
<!--                                            <i class="icon-lock-open"></i>-->
<!--                                            <span class="title">Lock Screen 2</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="nav-item  ">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class="icon-social-dribbble"></i>-->
<!--                                    <span class="title">综合</span>-->
<!--                                    <span class="arrow"></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_general_about.html" class="nav-link ">-->
<!--                                            <i class="icon-info"></i>-->
<!--                                            <span class="title">About</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_general_contact.html" class="nav-link ">-->
<!--                                            <i class="icon-call-end"></i>-->
<!--                                            <span class="title">Contact</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                            <i class="icon-notebook"></i>-->
<!--                                            <span class="title">Portfolio</span>-->
<!--                                            <span class="arrow"></span>-->
<!--                                        </a>-->
<!--                                        <ul class="sub-menu">-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_general_portfolio_1.html" class="nav-link "> Portfolio 1 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_general_portfolio_2.html" class="nav-link "> Portfolio 2 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_general_portfolio_3.html" class="nav-link "> Portfolio 3 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_general_portfolio_4.html" class="nav-link "> Portfolio 4 </a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                            <i class="icon-magnifier"></i>-->
<!--                                            <span class="title">Search</span>-->
<!--                                            <span class="arrow"></span>-->
<!--                                        </a>-->
<!--                                        <ul class="sub-menu">-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_general_search.html" class="nav-link "> Search 1 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_general_search_2.html" class="nav-link "> Search 2 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_general_search_3.html" class="nav-link "> Search 3 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_general_search_4.html" class="nav-link "> Search 4 </a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item ">-->
<!--                                                <a href="page_general_search_5.html" class="nav-link "> Search 5 </a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_general_pricing.html" class="nav-link ">-->
<!--                                            <i class="icon-tag"></i>-->
<!--                                            <span class="title">Pricing</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_general_faq.html" class="nav-link ">-->
<!--                                            <i class="icon-wrench"></i>-->
<!--                                            <span class="title">FAQ</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_general_blog.html" class="nav-link ">-->
<!--                                            <i class="icon-pencil"></i>-->
<!--                                            <span class="title">Blog</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_general_blog_post.html" class="nav-link ">-->
<!--                                            <i class="icon-note"></i>-->
<!--                                            <span class="title">Blog Post</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_general_invoice.html" class="nav-link ">-->
<!--                                            <i class="icon-envelope"></i>-->
<!--                                            <span class="title">Invoice</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_general_invoice_2.html" class="nav-link ">-->
<!--                                            <i class="icon-envelope"></i>-->
<!--                                            <span class="title">Invoice 2</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="nav-item  ">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class="icon-settings"></i>-->
<!--                                    <span class="title">系统管理</span>-->
<!--                                    <span class="arrow"></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_cookie_consent_1.html" class="nav-link ">-->
<!--                                            <span class="title">Cookie Consent 1</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_cookie_consent_2.html" class="nav-link ">-->
<!--                                            <span class="title">Cookie Consent 2</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_system_coming_soon.html" class="nav-link " target="_blank">-->
<!--                                            <span class="title">Coming Soon</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_system_404_1.html" class="nav-link ">-->
<!--                                            <span class="title">404 Page 1</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_system_404_2.html" class="nav-link " target="_blank">-->
<!--                                            <span class="title">404 Page 2</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_system_404_3.html" class="nav-link " target="_blank">-->
<!--                                            <span class="title">404 Page 3</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_system_500_1.html" class="nav-link ">-->
<!--                                            <span class="title">500 Page 1</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item  ">-->
<!--                                        <a href="page_system_500_2.html" class="nav-link " target="_blank">-->
<!--                                            <span class="title">500 Page 2</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class="icon-folder"></i>-->
<!--                                    <span class="title">多级菜单</span>-->
<!--                                    <span class="arrow "></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                            <i class="icon-settings"></i> Item 1-->
<!--                                            <span class="arrow"></span>-->
<!--                                        </a>-->
<!--                                        <ul class="sub-menu">-->
<!--                                            <li class="nav-item">-->
<!--                                                <a href="javascript:;" target="_blank" class="nav-link">-->
<!--                                                    <i class="icon-user"></i> Arrow Toggle-->
<!--                                                    <span class="arrow nav-toggle"></span>-->
<!--                                                </a>-->
<!--                                                <ul class="sub-menu">-->
<!--                                                    <li class="nav-item">-->
<!--                                                        <a href="#" class="nav-link">-->
<!--                                                            <i class="icon-power"></i> Sample Link 1</a>-->
<!--                                                    </li>-->
<!--                                                    <li class="nav-item">-->
<!--                                                        <a href="#" class="nav-link">-->
<!--                                                            <i class="icon-paper-plane"></i> Sample Link 1</a>-->
<!--                                                    </li>-->
<!--                                                    <li class="nav-item">-->
<!--                                                        <a href="#" class="nav-link">-->
<!--                                                            <i class="icon-star"></i> Sample Link 1</a>-->
<!--                                                    </li>-->
<!--                                                </ul>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a href="#" class="nav-link">-->
<!--                                                    <i class="icon-camera"></i> Sample Link 1</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a href="#" class="nav-link">-->
<!--                                                    <i class="icon-link"></i> Sample Link 2</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a href="#" class="nav-link">-->
<!--                                                    <i class="icon-pointer"></i> Sample Link 3</a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="javascript:;" target="_blank" class="nav-link">-->
<!--                                            <i class="icon-globe"></i> Arrow Toggle-->
<!--                                            <span class="arrow nav-toggle"></span>-->
<!--                                        </a>-->
<!--                                        <ul class="sub-menu">-->
<!--                                            <li class="nav-item">-->
<!--                                                <a href="#" class="nav-link">-->
<!--                                                    <i class="icon-tag"></i> Sample Link 1</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a href="#" class="nav-link">-->
<!--                                                    <i class="icon-pencil"></i> Sample Link 1</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a href="#" class="nav-link">-->
<!--                                                    <i class="icon-graph"></i> Sample Link 1</a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="#" class="nav-link">-->
<!--                                            <i class="icon-bar-chart"></i> Item 3 </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content" style="min-height: 1927px;">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?= Url::to(['/']) ?>">首页</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>UI Features</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <?= $content ?>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2017 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
            <!-- append page'js -- zuiw -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= Yii::$app->request->hostInfo ?>/style/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <!-- append page'js -- zuiw -->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?= Yii::$app->request->hostInfo ?>/style/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?= Yii::$app->request->hostInfo ?>/style/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?= Yii::$app->request->hostInfo ?>/style/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?= Yii::$app->request->hostInfo ?>/style/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        <?php $this->endBody() ?>
    </body>

</html>
<?php $this->endPage() ?>