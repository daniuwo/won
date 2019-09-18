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
                    <?php foreach ($fuji as $v): ?>
                    <option value="<?php echo $v['id'];?>"> <?php echo $v['_name'];?></option>
                    <?php endforeach ?>
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
