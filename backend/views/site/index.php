<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="title_right"><span class="pull-right margin-bottom-5"><a  class="btn btn-info btn-small"  id="modal-9735581" href="#modal-container-9735581" role="button" data-toggle="modal"><i class="icon-plus icon-white"></i> 添加线路城市</a></span><strong>线路管理</strong></div>



<div id="modal-container-9735581" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:600px; margin-left:-300px; top:20%">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">
            线路管理
        </h3>
    </div>
    <div class="modal-body">
        <table class="table table-bordered">
            <tbody>

            <tr>
                <td align="right">城市:</td>
                <td align="left"><input name="endTextBox" type="text" id="endTextBox" class="span1-1" />
                    [*]</td>
                <td align="right">缩写:</td>
                <td align="left" colspan="3"><input name="tbx_short2" type="text" id="tbx_short2" class="span1-1" />
                    [*]</td>
            </tr>
            <tr>
                <td align="right">联系人</td>
                <td align="left"><input name="manTextBox" type="text" id="manTextBox" class="span1-1" /></td>
                <td align="right">电话:</td>
                <td align="left" colspan="3"><input name="phoneTextBox" type="text" id="phoneTextBox" class="span1-1" /></td>
            </tr>
            <tr>
                <td align="right">郑货总部分成比例:</td>
                <td align="left"><input name="TextBox1" type="text" value="0" id="TextBox1" class="span1-1" />
                    %</td>
                <td align="right">郑货分公司分成比例:</td>
                <td colspan="3" align="left"><input name="TextBox2" type="text" value="0" id="TextBox2" class="span1-1" />
                    %</td>
            </tr>
            <tr>
                <td align="right">返货总部分成比例:</td>
                <td align="left"><input name="TextBox3" type="text" value="0" id="TextBox3" class="span1-1" />
                    %</td>
                <td align="right">返货分公司分成比例:</td>
                <td colspan="3" align="left"><input name="TextBox4" type="text" value="0" id="TextBox4" class="span1-1" />
                    %</td>
            </tr>
            <tr>
                <td colspan="6" align="center">网内中转货分成比例</td>
            </tr>
            <tr>
                <td align="right">（中转）发货方分成比例:</td>
                <td align="left"><input name="TextBox5" type="text" value="0" id="TextBox5" class="span1-1" />
                    %</td>
                <td align="right">（中转）收货方分成比例:</td>
                <td colspan="3" align="left"><input name="TextBox6" type="text" value="0" id="TextBox6"class="span1-1"  />
                    %</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <button class="btn btn-info" data-dismiss="modal" aria-hidden="true" style="width:80px">保存</button>
        <button class="btn btn-info" data-dismiss="modal" aria-hidden="true" style="width:80px">取消</button>
    </div>
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
    <tr align="center">
        <td nowrap="nowrap">郑州</td>
        <td nowrap="nowrap">zz </td>
        <td nowrap="nowrap"> </td>
        <td nowrap="nowrap"> 0371-8628715</td>
        <td nowrap="nowrap"><a href="#">删除</a> <a href="#">编辑</a></td>
    </tr>

    </tbody>
</table>