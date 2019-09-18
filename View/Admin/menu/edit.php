{include ../common/head}
<div class="content openwindow">
    <form id="form" class="form-horizontal form-ajax" role="form" data-toggle="validator" method="POST" action="">
        <input type="hidden" name="ation" value="edit">
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">父级:</label>
            <div class="col-xs-12 col-sm-8">
                <select class="form-control selectpicker" data-rule="required" name="fid">
                    <option value="0"> 选择</option>
                    {foreach $fuji as $k=> $v}
                    <option value="{$v.id}" {if $v['_selected']}selected{/if}> {$v._name}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">类型:</label>
            <div class="col-xs-12 col-sm-8">
                <select class="form-control selectpicker" data-rule="required" name="menutype">
                    <option value="1" {if $data['menutype'] == 1}selected{/if}> 系统页面</option>
                    <option value="2" {if $data['menutype'] == 2}selected{/if}> URL链接</option>
                    <option value="3" {if $data['menutype'] == 3}selected{/if}> 文字</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">是菜单?:</label>
            <div class="col-xs-12 col-sm-8">
                <div class="radio">
                    <label for="row[ismenu]-normal"><input id="row[ismenu]-normal" {if $data['ismenu'] == 1}checked="checked"{/if} name="ismenu" type="radio" value="1" > 是的</label> 
                    <label for="row[ismenu]-hidden"><input id="row[ismenu]-hidden" {if $data['ismenu'] == 0}checked="checked"{/if} name="ismenu" type="radio" value="0"> 不是</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">名称:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="name" value="{$data.name}" data-rule="required" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">昵称:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="name2" value="{$data.name2}" data-rule="required" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">图标:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="icon" value="{$data.icon}" data-rule="required" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">关键词:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="keydowds" value="{$data.keywords}" data-rule="required" />
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
                <input type="text" class="form-control" id="name" name="paixu" value="{$data.paixu}" data-rule="required" />
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">状态:</label>
            <div class="col-xs-12 col-sm-8">
                <div class="radio">
                    <label for="row[status]-normal"><input id="row[status]-normal" {if $data['status'] == 1}checked="checked"{/if} name="status" type="radio" value="1" > 正常</label> 
                    <label for="row[status]-hidden"><input id="row[status]-hidden" {if $data['status'] == 0}checked="checked"{/if}  name="status" type="radio" value="0"> 隐藏</label>
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
