<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?> | 蜗牛后台管理程序<?php echo $conf['title2'];?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.4.1 -->
  <link href="https://cdn.bootcss.com/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome 4.7.0 -->
  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Ionicons 2.0 -->
  <link href="https://cdn.bootcss.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
  <!-- Toastr -->
  <link href="https://cdn.bootcss.com/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link href="https://cdn.bootcss.com/admin-lte/2.4.17/css/AdminLTE.css" rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- <link rel="stylesheet" href="<?php echo WWW_STATIC;?>admin/dist/css/skins/_all-skins.min.css"> -->
  <link rel="stylesheet" href="<?php echo WWW_STATIC;?>admin/dist/css/skins/_all-skins.css">
  <link rel="stylesheet" href="<?php echo WWW_STATIC;?>admin/dist/css/won.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition sidebar-mini fixed skin-white-blue">
<div class="wrapper">
<div class="content openwindow">
    <form id="form" class="form-horizontal form-ajax" role="form" data-toggle="validator" method="POST" action="">
        <input type="hidden" name="gn" value="add">
        <input type="hidden" name="row[rules]" value="" />
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">头衔:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="text" class="form-control" id="name" name="row[name]" value="" data-rule="required" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">头衔颜色:</label>
            <div class="col-xs-12 col-sm-8">
                <input type="color" class="form-control" id="name" name="row[color]" value="" data-rule="required" />
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
                <div class="radio"><label for="row[status]-normal"><input id="row[status]-normal" checked="checked" name="row[status]" type="radio" value="1"> 正常</label>
                <label for="row[status]-hidden"><input id="row[status]-hidden" name="row[status]" type="radio" value="0"> 禁止</label></div>
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
<div class="layui-layer-btn layui-layer-footer">
    <div class="row">
        <label class="control-label col-xs-12 col-sm-2 hidden-xs"></label>
        <div class="col-xs-12 col-sm-8">
            <div class="">
                <a class="layui-layer-btn0" id="postform">确定</a>
                <a href="javascript:;" class="layui-layer-btn1" id="closewindow">关闭</a>
            </div>
        </div>
    </div>
</div>


</div>
    <!-- jQuery 3 -->
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="https://cdn.bootcss.com/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="https://cdn.bootcss.com/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script>
    <!-- FastClick -->
    <script src="https://cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.bootcss.com/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- Layer -->
    <script src="https://cdn.bootcss.com/layer/2.3/layer.js"></script>
    <!-- jquery toastr -->
    <script src="https://cdn.bootcss.com/toastr.js/2.1.4/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo WWW_STATIC;?>admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo WWW_STATIC;?>admin/dist/js/won.js"></script>
    <script>
      $(document).ready(function () {
        $('.sidebar-menu').tree()
      })
    </script>
  </body>
</html>
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
    // // var data = ;
	$('#treeview').jstree({
        'plugins'   : ["checkbox"], 
        'core'      : {
            'data' : <?php echo $json;?>
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
        var data = $.jstree.reference('#treeview').get_selected()
        var value = '';
        $.each(data, function (i, v) { 
            value += value?','+v:v;
        });
        $('[name="row[rules]"]').val(value);
    }
    $("#ceshi").click(function(){
        yixuan()
    })
    // $('#treeview').jstree('select_all');
    // $.jstree.reference('#jstree').select_node('mn3');
</script>