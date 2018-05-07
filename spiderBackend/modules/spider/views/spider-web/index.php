<?php

/* @var $this yii\web\View */

$this->title = '采集站点';
?>

<div class="title_right">
        <span class="pull-right margin-bottom-5">
                <a  class="btn btn-info btn-small"  id="modal" href="#modal-pop" role="button" data-toggle="modal">
                    <i class="icon-plus icon-white"></i> 添加采集站点
                </a>
        </span>
    <strong>采集站点</strong>
</div>

<table class="table table-bordered table-striped table-hover">
    <tbody>
    <tr align="center">
        <td nowrap="nowrap"><strong>采集站点</strong></td>
        <td nowrap="nowrap"><strong>站点网址</strong></td>
        <td nowrap="nowrap"><strong>采集状态</strong></td>
        <td nowrap="nowrap"><strong>添加时间</strong></td>
        <td width="80" nowrap="nowrap"><strong> 操作 </strong></td>
    </tr>
    <?php foreach ($list as $k=>$v){ ?>
    <tr align="center">
        <td nowrap="nowrap"><?= $v['web_name']; ?></td>
        <td nowrap="nowrap"><?= $v['web_host']; ?></td>
        <td nowrap="nowrap"><?= $v['state'] ?></td>
        <td nowrap="nowrap"><?= $v['createTime']; ?></td>
        <td nowrap="nowrap">
            <a class="btn btn-info btn-addSpiderList" href="#modal-pop-addlist" id="modal1" role="button" data-toggle="modal" thisId="<?= $v['id'] ?>" thisHostName="<?= $v['web_name'] ?>" >添加采集列表</a>
            <a class="btn btn-info btn-edit"  id="modal" href="#modal-pop" role="button" data-toggle="modal" thisHostName="<?= $v['web_name'] ?>" thisId="<?= $v['id'] ?>" thisHostUrl="<?= $v['web_url'] ?>">编辑</a>
            <a class="btn btn-info btn-del" href="">删除</a>
        </td>
    </tr>
    <?php  } ?>
    </tbody>
</table>

<!-- 添加站点 -->
<div id="modal-pop" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:600px; margin-left:-300px; top:20%">
    <form action="<?= Yii::$app->request->hostInfo ?>/spider/spider-web/add" id="form1" name="form1" method="post">
        <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
        <input name="hostId" id="hostId" type="hidden" value="">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">
                被采集站点
            </h3>
        </div>
        <div class="modal-body">
            <table class="table table-bordered">
                <tbody>

                <tr>
                    <td align="right" width="80px;">站点名称:</td>
                    <td align="left"><input name="webName" type="text" id="webName" class="span1-1" style="width: 450px;" /></td>
                </tr>
                <tr>
                    <td align="right">站点地址:</td>
                    <td align="left"><input name="webUrl" type="text" id="webUrl" class="span1-1" style="width: 450px;" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-info" style="width:80px" value="保存">
            <button type="button" class="btn btn-info" data-dismiss="modal" aria-hidden="true">取消</button>
        </div>
    </form>
</div>

<!-- 添加列表 -->
<div id="modal-pop-addlist" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:600px; margin-left:-300px; top:20%">
    <form action="<?= Yii::$app->request->hostInfo ?>/spider/spider-web/add-list" id="form2" name="form2" method="post">
        <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
        <input name="hostId" id="hostId" type="hidden" value="">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">
                添加采集列表
            </h3>
        </div>
        <div class="modal-body">
            <table class="table table-bordered">
                <tbody>

                <tr>
                    <td align="right" width="80px;">站点名称:</td>
                    <td align="left"><span name="spanWebName" id="spanWebName"></span></td>
                </tr>
                <tr>
                    <td align="right" width="80px;">列表起始地址:</td>
                    <td align="left"><input name="starUrl" type="text" id="starUrl" class="span1-1" style="width: 450px;" /></td>
                </tr>
                <tr>
                    <td align="right">例外地址:</td>
                    <td align="left"><textarea role="5" style="widows:200px;" name="otherUrl" id="otherUrl"></textarea></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-info" style="width:80px" value="保存">
            <button type="button" class="btn btn-info" data-dismiss="modal" aria-hidden="true">取消</button>
        </div>
    </form>
</div>



<script type="text/javascript">
    $(document).ready(function(){

        // 编辑按钮
        $('.btn-edit').click(function(){

            var thisHostName = $(this).attr('thisHostName');
            var thisId = $(this).attr('thisId');
            var thisHostUrl = $(this).attr('thisHostUrl');

            $("#hostId").val(thisId);
            $("#webName").val(thisHostName);
            $("#webUrl").val(thisHostUrl);
        });

        // 添加列表按钮
        $('.btn-addSpiderList').click(function(){

//            var thisHostName = $(this).attr('thisHostName');
            var thisId = $(this).attr('thisId');

            $("#hostId").val(thisId);
//            $("#webName").val(thisHostName);
            document.getElementById("spanWebName").innerText = $(this).attr('thisHostName');
        });

    });

</script>

