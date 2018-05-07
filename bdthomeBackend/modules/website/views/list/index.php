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

$this->title = '站点列表';

?>

<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> 大数据网站列表
    <small>大数据行业网站列表</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <div class="note note-success">
            <p> 大数据行业网站汇总。 </p>
        </div>
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Bordered Bootstrap 3.0 Responsive Table </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th> 名称 </th>
                            <th> 描述 </th>
                            <th> 访问量 </th>
                            <th> 跳转数 </th>
                            <th> 添加时间 </th>
                            <th width="137px;">  </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($list as $k=>$v){ ?>
                            <tr>
                                <td><?= $v['id'] ?>  </td>
                                <td><?= $v['title'] ?></td>
                                <td><?= $v['description'] ?></td>
                                <td><?= $v['vsits'] ?></td>
                                <td><?= $v['jump_num'] ?></td>
                                <td><?= date("Y-m-d H:i:s",$v['addtime']) ?> </td>
                                <td>
                                    <div class="btn-group btn-group-circle">
                                        <a class="btn btn-outline green btn-sm" href="<?= Url::to(['/article/content/edit','id'=>$v['id']]) ?>">编辑</a>
                                        <a class="btn btn-outline red btn-sm" href="<?= Url::to(['/article/content/del','id'=>$v['id']]) ?>">删除</a>
                                    </div>
                                </td>
                            </tr>
                        <?php }  ?>
                        </tbody>
                    </table>
                    <?= LinkPager::widget(['pagination' => $pages]); ?>
                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->

    </div>
</div>
<!-- END CONTENT -->
