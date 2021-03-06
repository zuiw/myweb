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

$this->title = '添加站点';

$this->registerCssFile('@web/style/global/plugins/select2/css/select2.min.css');
$this->registerCssFile('@web/style/global/plugins/select2/css/select2-bootstrap.min.css');
$this->registerCssFile('@web/style/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css');
$this->registerCssFile('@web/style/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css');
$this->registerCssFile('@web/style/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css');
$this->registerJsFile('@web/style/pages/scripts/form-validation.min.js',['position' => \yii\web\View::POS_END]);

//$this->registerCssFile('@web/style/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css');
//$this->registerCssFile('@web/style/global/plugins/bootstrap-modal/css/bootstrap-modal.css');
//$this->registerJsFile('@web/style/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js',['position' => \yii\web\View::POS_END]);
//$this->registerJsFile('@web/style/global/plugins/bootstrap-modal/js/bootstrap-modal.js',['position' => \yii\web\View::POS_END]);
//$this->registerJsFile('@web/style/pages/scripts/ui-extended-modals.min.js',['position' => \yii\web\View::POS_END]);

?>

<!-- BEGIN CONTENT BODY -->

    <!-- BEGIN PAGE HEADER-->

    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> 添加站点
        <small>站点添加</small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase">增加站点</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <form name="form1" id="form1" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="_csrf" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
                        <div class="form-body">
<!--                            <div class="alert alert-danger display-hide">-->
<!--                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>-->
<!--                            <div class="alert alert-success display-hide">-->
<!--                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>-->
                            <div class="form-group">
                                <label class="control-label col-md-2">站点名称
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="title" data-required="1" class="form-control" /> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">地址
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="url" data-required="1" class="form-control" /> </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">图片&nbsp;&nbsp;</label>
                                <div class="col-md-8">
                                    <input name="label" type="text" class="form-control" /> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">分类
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control select2me" name="category">
                                        <option value="">选择分类</option>
                                        <?= treeCategoryOption($category); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">简介
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-10">
                                    <textarea class="wysihtml5 form-control" rows="4" name="describe" data-error-container="#editor1_error"></textarea>
                                    <div id="editor1_error"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" class="btn green" value="提交">
                                    <input type="reset" class="btn default" value="取消">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>

<!-- END CONTENT BODY -->



<?php

function treeCategoryOption($array,$deep=0){

    $option = '';
    $mark = '';

    for($i=0;$i<$deep;$i++){
        $mark .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    $mark .= '┣━ ';

    foreach ($array as $k=>$v ) {

        echo  '<option value="'.$v['id'].'">'.$mark.$v['cn_name']."</option>";

        // 判断是否有下级
        if(!empty($v['son'])){
            echo  treeCategoryOption($v['son'],$deep+1);
        }
    }
}

?>