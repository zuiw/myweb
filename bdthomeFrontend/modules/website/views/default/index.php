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
use backend\assets\AppAsset;
use yii\widgets\LinkPager;
use yii\helpers\GlobalFunctions;
use yii\helpers\Url;
use app\models\ArticleCategory;
use app\models\Website;
use app\models\WebsiteCategory;

$this->title = '网站导航';

$this->registerCssFile('@web/style/global/plugins/bootstrap-modal/css/bootstrap-datepicker3.min.css');
$this->registerCssFile('@web/style/global/plugins/bootstrap-modal/css/jquery.fancybox.css');

$this->registerJsFile('@web/style/global/plugins/bootstrap-modal/js/bootstrap-datepicker.min.js',['position' => \yii\web\View::POS_END]);
$this->registerJsFile('@web/style/global/plugins/bootstrap-modal/js/jquery.fancybox.pack.js',['position' => \yii\web\View::POS_END]);

AppAsset::register($this);

?>

<div class="page-container">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->

        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container">
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="page-content-inner">
                    <div class="blog-page blog-content-1">
                        <div class="row">

                            <div class="page-wrapper">

                                <!-- BEGIN CONTAINER -->
                                <div class="page-container">
                                    <!-- BEGIN CONTENT -->
                                    <div class="page-content-wrapper">
                                        <!-- BEGIN CONTENT BODY -->
                                        <div class="page-content">
                                            <!-- BEGIN PAGE HEADER-->

                                            <!-- BEGIN PAGE TITLE-->
                                            <h1 class="page-title"> &nbsp;
                                                <small>网站导航</small>
                                            </h1>
                                            <!-- END PAGE TITLE-->
                                            <!-- END PAGE HEADER-->
                                            <div class="search-page search-content-4">
                                                <div class="search-table table-responsive">
                                                    <table class="table table-bordered table-striped table-condensed">
                                                        <tbody>
                                                        <?php foreach($list as $k=>$v){ ?>
                                                        <tr>
                                                            <td class="table-date font-blue col-lg-2">
                                                                <a href="javascript:;"><?= $v['category_name'] ?></a>
                                                            </td>
                                                            <td class="table-desc">
                                                                <?php foreach($v['website'] as $_k=>$_v){

                                                                    if(!empty($_v['url'])){
                                                                        echo '<a href="'.$_v['url'].'" target="_blank">'.$_v['title'].'</a>&nbsp;&nbsp;&nbsp;';
                                                                    }else{
                                                                        echo $_v['title'].'&nbsp;&nbsp;&nbsp;';
                                                                    }

                                                                  } ?>
                                                            </td>
                                                            <td class="table-download col-lg-1">
                                                                <a href="javascript:;">
                                                                    更多>>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END CONTENT BODY -->
                                    </div>
                                    <!-- END CONTENT -->
                                </div>
                                <!-- END CONTAINER -->

                            </div>

                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT INNER -->
            </div>
        </div>
        <!-- END PAGE CONTENT BODY -->
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
</div>





