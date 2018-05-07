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

?>

<div class="page-container">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <div class="container">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <!-- BEGIN PAGE BREADCRUMBS - ->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>General</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                </div>
                <!-- END PAGE TITLE -->
            </div>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container">
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="page-content-inner">
                    <div class="blog-page blog-content-1">
                        <div class="row">
                            <div class="col-lg-9">
                                <?php foreach($list as $k=>$v){ ?>
                                <div class="blog-post-lg bordered blog-container">
                                    <!-- top pic start -- >
                                    <div class="blog-img-thumb">
                                        <a href="javascript:;">
                                            <img src="<?php //echo Yii::$app->request->hostInfo ?>/style/pages/img/page_general_search/5.jpg" />
                                        </a>
                                    </div>
                                    <!-- top pic end -->
                                    <div class="blog-post-content">
                                        <h2 class="blog-title blog-post-title">
                                            <a href="<?= Url::to(['/content','id'=>$v['id']]) ?>" target="_blank"><?= $v['title'] ?></a>
                                        </h2>
                                        <p class="blog-post-desc"> <?= $v['description'] ?> </p>
                                        <div class="blog-post-foot">
                                            <ul class="blog-post-tags">
                                                <?php foreach($v['tags'] as $_k=>$_v){ ?>
                                                <li class="uppercase">
                                                    <a href="javascript:;"><?= $_v['name'] ?></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                            <div class="blog-post-meta">
                                                <i class="icon-calendar font-blue"></i>
                                                <a href="javascript:;"><?= $v['addtime'] ?></a>
                                            </div>
                                            <div class="blog-post-meta">
                                                <i class="fa fa-eye font-blue"></i>
                                                <a href="javascript:;"><?= $v['vsits'] ?></a>
                                            </div>
                                            <div class="blog-post-meta">
                                                <i class="icon-bubble font-blue"></i>
                                                <a href="javascript:;">
                                                    <span id = "article_<?= $v['id'] ?>" class = "cy_cmt_count" ></span>
                                                    <script id="cy_cmt_num" src="https://changyan.sohu.com/upload/plugins/plugins.list.count.js?clientId=cyt4F837f">
                                                    </script>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?= LinkPager::widget(['pagination' => $pages]); ?>

                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- bdthom 首页底部 -->
                                <ins class="adsbygoogle"
                                     style="display:block"
                                     data-ad-client="ca-pub-4145991205132467"
                                     data-ad-slot="6459715424"
                                     data-ad-format="auto"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>

                            </div>
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="blog-video bordered blog-container">
                                            <div class="blog-img-thumb">
                                                <a href="javascript:;">
                                                    <img src="<?= Yii::$app->request->hostInfo ?>/style/pages/img/page_general_search/4.jpg" />
                                                </a>
                                            </div>
                                            <a href="javascript:;" class="blog-video-play">
                                                <i class="fa fa-play"></i>
                                            </a>
                                            <div class="blog-video-content">
                                                <h3 class="blog-title blog-video-title">
                                                    <a href="javascript:;">大数据从入门到放弃</a>
                                                </h3>
                                                <p class="blog-video-desc">吐槽、聊天、学习群</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="blog-banner blog-container" style="background-image:url(<?= Yii::$app->request->hostInfo ?>/style/pages/img/background/7.jpg);">
                                            <h2 class="blog-title blog-banner-title">
                                                <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=c478faf3398292055b048a95da5c00b7eed7dac4bcc8b695de794153de8ddc3c">QQ群：453266355</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content-2">
                                    <div class="blog-single-sidebar bordered blog-container">
                                        <div class="blog-single-sidebar-recent">
                                            <!-- 代码1：放在页面需要展示的位置  -->
                                            <!-- 如果您配置过sourceid，建议在div标签中配置sourceid、cid(分类id)，没有请忽略  -->
                                            <div id="cyHotnews" role="cylabs" data-use="hotnews"></div>
                                        </div>

                                        <!-- 如果页面同时使用多个实验室项目，以下代码只需要引入一次，只配置上面的div标签即可 -->
                                        <script type="text/javascript" charset="utf-8" src="https://changyan.itc.cn/js/lib/jquery.js"></script>
                                        <script type="text/javascript" charset="utf-8" src="https://changyan.sohu.com/js/changyan.labs.https.js?appid=cyt4F837f"></script>

                                        <div class="blog-single-sidebar-tags">
                                            <h3 class="blog-sidebar-title uppercase">标签</h3>
                                            <ul class="blog-post-tags">
                                                <?php foreach($articleList as $k=>$v){ ?>
                                                <li class="uppercase">
                                                    <a href="javascript:;"><?= $v['name'].'('.$v['article_num'].')' ?></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <?= $this->render('/sidebar/links') ?>

                                        <!-- div class="blog-single-sidebar-ui">
                                            <h3 class="blog-sidebar-title uppercase">UI Examples</h3>
                                            <div class="row ui-margin">
                                                <div class="col-xs-4 ui-padding">
                                                    <a href="javascript:;">
                                                        <img src="./style/pages/img/background/1.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-xs-4 ui-padding">
                                                    <a href="javascript:;">
                                                        <img src="./style/pages/img/background/37.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-xs-4 ui-padding">
                                                    <a href="javascript:;">
                                                        <img src="./style/pages/img/background/57.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-xs-4 ui-padding">
                                                    <a href="javascript:;">
                                                        <img src="./style/pages/img/background/53.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-xs-4 ui-padding">
                                                    <a href="javascript:;">
                                                        <img src="./style/pages/img/background/59.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-xs-4 ui-padding">
                                                    <a href="javascript:;">
                                                        <img src="./style/pages/img/background/42.jpg" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div -->
                                    </div>
                                </div>
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