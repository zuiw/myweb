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
?>

<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th> 标题 </th>
                            <th width="137px;">  </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($list as $k=>$v){ ?>
                            <tr>
                                <td><?= $v['id'] ?>  </td>
                                <td><a href="<?= Url::to(['/spider/content/edit-push','id'=>$v['id']]) ?>"><?= $v['title'] ?></a></td>
                                <td>
                                    <div class="btn-group btn-group-circle">
                                        <a class="btn btn-outline green btn-sm" href="<?= Url::to(['/spider/content/edit-push','id'=>$v['id']]) ?>">编辑</a>
                                        <a class="btn btn-outline red btn-sm" href="<?= Url::to(['/spider/content/del','id'=>$v['id']]) ?>">删除</a>
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
