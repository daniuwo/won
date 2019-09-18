{include ../common/head}
<div class="content openwindow">
    <form id="form" class="form-horizontal form-ajax" role="form" data-toggle="validator" method="POST" action="">
        <input type="hidden" name="gn" value="edit">
        <input type="hidden" name="row[rules]" value="{$ids}" />
        <input type="hidden" name="row[role_id]" value="{#X('role_id')}" />
        <input type="hidden" name="row[ud]" value="{#X('ud')}" />
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">头衔:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="row[name]" value="{$data.name}" data-rule="required" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">头衔颜色:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="color" class="form-control" id="name" name="row[color]" value="{$data.color}" data-rule="required" />
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">权限:</label>
            <div class="col-xs-12 col-sm-8">
                <span class="text-muted"><input type="checkbox" name="" id="checkall" /> <label for="checkall"><small>选择所有</small></label></span>
                <span class="text-muted"><input type="checkbox" name="" id="expandall" /> <label for="expandall"><small>全部展开</small></label></span>

                <div id="treeview"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">状态:</label>
            <div class="col-xs-12 col-sm-8">
                <div class="radio">
                    <label for="row[status]-normal"><input id="row[status]-normal" {if $data['status'] == 1}checked="checked"{/if} name="row[status]" type="radio" value="1"> 正常</label>
                    <label for="row[status]-hidden"><input id="row[status]-hidden" {if $data['status'] == 0}checked="checked"{/if} name="row[status]" type="radio" value="0"> 禁止</label>
                </div>
            </div>
        </div>
        <div class="form-group hidden layer-footer">
            <label class="control-label col-xs-12 col-sm-2"></label>
            <div class="col-xs-12 col-sm-8">
                <button type="submit" class="btn btn-success btn-embossed disabled">OK</button>
                <button type="reset" class="btn btn-default btn-embossed">Reset</button>
            </div>
        </div>
    </form>
</div>
{include jiekou_footer}

{include ../common/foot}
<link href="https://cdn.bootcss.com/jstree/3.3.8/themes/default/style.min.css" rel="stylesheet">
<style>
    .jstree-default .jstree-themeicon{display:none}
    .jstree-default .jstree-node{
        clear: both;
    }
    #treeview .jstree-leaf{
        float: left;
        clear: none;
        background: none;
    }
    #treeview .jstree-children:after {
        clear: both;
        content: " ";
        display: table;
    }
    #treeview .jstree-container-ul>.jstree-node {
        display: block;
        clear: both;
    }
    .jstree-default .jstree-clicked{
        background: transparent;
        border-radius: 0;
        box-shadow: none;
    }
    .jstree-default .jstree-leaf > .jstree-ocl{
        background: none;
        display: none;
    }
</style>
<script src="https://cdn.bootcss.com/jstree/3.3.8/jstree.min.js"></script>
<script>
	var tree = $('#treeview').jstree({
        'plugins'   : ["checkbox"], 
        'core'      : {
            'data' : {$json}
        }
    }).on('activate_node.jstree',function(){
        yixuan()
    });
    $('#checkall').click(function(){
        if($(this).is(':checked')){
            $.jstree.reference('#treeview').select_all();
        }else{
            $.jstree.reference('#treeview').deselect_all();
        }
        yixuan()
    })
    $('#expandall').click(function(){
        if($(this).is(':checked')){
            $.jstree.reference('#treeview').open_all();
        }else{
            $.jstree.reference('#treeview').close_all();
        }
        yixuan()
    })
    function yixuan(){
        // 获取所有选定节点
        var data = $.jstree.reference('#treeview').get_selected()
        // 获取所有未确定节点
        var undetermined = $.jstree.reference('#treeview').get_undetermined()
        var value = '';
        var ud = '';
        $.each(data, function (i, v) { 
            value += value?','+v:v;
        });
        if(undetermined.length!=0){
            $.each(undetermined, function (i, v) { 
                value += value?','+v:v;
                ud += ud?','+v:v;
            });
        }
        $('[name="row[ud]"]').val(ud);
        $('[name="row[rules]"]').val(value);
    }
    $("#ceshi").click(function(){
        yixuan()
    })
    // $('#treeview').jstree('select_all');
    // $.jstree.reference('#jstree').select_node('mn3');
</script>