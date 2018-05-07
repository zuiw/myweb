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
use bdthomeBackend\assets\AppAsset;
use yii\widgets\LinkPager;
use yii\helpers\GlobalFunctions;
use yii\helpers\Url;
use app\models\ArticleCategory;

$this->title = '内容类型管理';

$this->registerCssFile('@web/style/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css');
$this->registerCssFile('@web/style/global/plugins/bootstrap-modal/css/bootstrap-modal.css');
$this->registerJsFile('@web/style/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js',['position' => \yii\web\View::POS_END]);
$this->registerJsFile('@web/style/global/plugins/bootstrap-modal/js/bootstrap-modal.js',['position' => \yii\web\View::POS_END]);
$this->registerJsFile('@web/style/pages/scripts/ui-extended-modals.min.js',['position' => \yii\web\View::POS_END]);

AppAsset::register($this);
?>

<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> 内容分类
    <small>添加、删除、编辑的分类</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <div class="note note-success">
            <h4 class="block">内容分类</h4>
            <p> 在这里可以添加、删除、编辑文章的分类，文章的分类为两级分类。 </p>
        </div>
        <!-- BEGIN PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-body">
                <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <td> <a class="btn btn-outline dark" data-toggle="modal" href="#responsive"> 添加一级分类 </a> </td>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                    <?= treeCategoryList($category); ?>
                </table>
                <?php echo LinkPager::widget(['pagination'=>$pages]); ?>

                <!-- responsive -->
                <div id="responsive" class="modal fade" tabindex="-1" data-width="500" style="text-align: center;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title"><i class="icon-settings font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">设置内容分类</span></h4>
                    </div>
                    <form class="form-horizontal" role="form" name="form1" action="/article/category" method="post">
                    <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
                    <div class="modal-body">
                            <div class="col-md-12 ">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-body form">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">父级：</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="parentID">
                                                        <option value="0">┣━ 顶级分类</option>
                                                        <?= treeCategoryOption($category); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">名称：</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="请输入中文名称" name="cnName" id="cnName">
                                                    <span class="help-block"> * 此项必填. </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">代码：</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="请输入代表代码" name="enName" id="enName">
                                                    <span class="help-block"> * 此项必填. </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">状态：</label>
                                                <div class="col-md-9">
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="isShow" id="isShow" value="1" checked> 显示
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="isShow" id="isShow" value="0" checked> 隐藏
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-outline dark">关闭</button>
                        <button type="submit" class="btn green">提交</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>

<?php

    // 下拉列表
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

    // 列表
    function treeCategoryList($array,$deep=0){

        $option = '';
        $mark = '';

        for($i=0;$i<$deep;$i++){
            $mark .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        $mark .= '┣━ ';

        foreach ($array as $k=>$v ) {

            echo '
                 <tr>
                    <td>'.$mark.$v['cn_name'].'</td>
                    <td>
                        <a class="btn btn-outline dark" data-toggle="modal" href="#responsive" thisID="'.$v['id'].'"> 增加下级分类 </a>
                        <a class="btn btn-outline dark" data-toggle="modal" href="#responsive" thisID="'.$v['id'].'" thisCnName="'.$v['cn_name'].'" thisEnName="'.$v['en_name'].'"> 编辑 </a>
                        <a class="btn btn-outline dark" data-toggle="modal" href="#responsive" thisID="'.$v['id'].'"> 删除 </a>
                    </td>
                </tr>
                ';

            // 判断是否有下级
            if(!empty($v['son'])){
                echo  treeCategoryList($v['son'],$deep+1);
            }
        }
    }

?>




<script type="text/javascript">
    $(document).ready(function(){

        // 编辑
        $('.responsive').click(function(){
//            var id = $(this).attr('thisId');

//            $("input[name='id']").val(id);

            alert(112);

            $("input[name='cnName']").val($(this).attr('thisCnName'));
            $("input[name='weight']").val($(this).attr('thisWeight'));
            $("input[name='code']").val($(this).attr('thisCode'));
            $("input[name='parentId']").val($(this).attr('thisParentId'));
            $("input[name='seoTitle']").val($(this).attr('thisSeoTitle'));
            $("input[name='seoKeyword']").val($(this).attr('thisSeoKeyword'));
            $("input[name='seoDesc']").val($(this).attr('thisSeoDesc'));

            $('#editModal').modal('show');
        });
    });
</script>



