{include ../common/head}
<div class="content openwindow">
    <form id="form" class="form-horizontal form-ajax" role="form" data-toggle="validator" method="POST" action="">
        <input type="hidden" name="ation" value="add">
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">类型:</label>
            <div class="col-xs-12 col-sm-8">
                <select class="form-control selectpicker" data-rule="required" name="menutype">
                    <option value="1" selected> 系统页面</option>
                    <option value="2"> URL链接</option>
                    <option value="3"> 文字</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">是菜单?:</label>
            <div class="col-xs-12 col-sm-8">
                <div class="radio">
                    <label for="row[ismenu]-normal"><input id="row[ismenu]-normal" checked="checked" name="ismenu" type="radio" value="1" > 是的</label> 
                    <label for="row[ismenu]-hidden"><input id="row[ismenu]-hidden" name="ismenu" type="radio" value="0"> 不是</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">父级:</label>
            <div class="col-xs-12 col-sm-8">
                <select class="form-control selectpicker" data-rule="required" name="fid">
                    <option value="0" selected> 选择</option>
                    {foreach $fuji as $v}
                    <option value="{$v.id}"> {$v._name}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">名称:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="name" value="" data-rule="required" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">链接地址:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="name2" value="" data-rule="required" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">图标:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="icon" value="" data-rule="required" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">关键词:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="keydowds" value="" data-rule="required" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">描述:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="description" value="" data-rule="required" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">排序:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="paixu" value="" data-rule="required" />
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">状态:</label>
            <div class="col-xs-12 col-sm-8">
                <div class="radio">
                    <label for="row[status]-normal"><input id="row[status]-normal" checked="checked" name="status" type="radio" value="1" > 正常</label> 
                    <label for="row[status]-hidden"><input id="row[status]-hidden" name="status" type="radio" value="0"> 隐藏</label>
                </div>
            </div>
        </div>
        <div class="form-group hidden layer-footer">
            <label class="control-label col-xs-12 col-sm-2"></label>
            <div class="col-xs-12 col-sm-8">
                <button type="submit" class="btn btn-success btn-embossed disabled">确定</button>
                <button type="reset" class="btn btn-default btn-embossed">取消</button>
            </div>
        </div>
    </form>
</div>
{include ../common/btn_footer}

{include ../common/foot}
