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
<style>
  body,
  .wrapper{
    background-color: #f5f5f5 !important;
  }
  .lockscreen-wrapper{
    max-width: none;
    margin-top: 0;
  }
  .lockscreen-wrapper .lockscreen-name{
    text-align: center;
    text-transform: capitalize;
    font-weight: 400;
    font-size: 18px;
  }
  .lockscreen-footer {
    margin-top: 0;
    margin-bottom: 10px;
}
  .flex{
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    align-items: center;
    height: 100vh;
  }
  .lockscreen-logo b{
    color: #d2d0d0
}
</style>
<div class="flex">
    <div class="flex-header">
    </div>
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
          <b>蜗牛建站系统后台</b>
      </div>

      <!-- User name -->
      <div class="lockscreen-name"><?php echo $user['user'];?></div>
    
      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
          <img src="<?php echo WWW;?><?php echo $user['avatar']['b'];?>" alt="User Image">
        </div>
        <!-- /.lockscreen-image -->
    
        <!-- lockscreen credentials (contains the form) -->
        <form class="lockscreen-credentials" action="" method="post">
          <div class="input-group">
            <input type="password" name="pass" class="form-control" placeholder="密码">
    
            <div class="input-group-btn">
              <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
            </div>
          </div>
        </form>
        <!-- /.lockscreen credentials -->
    
      </div>
      <!-- /.lockscreen-item -->
      <div class="help-block text-center">
          输入您的密码进行登录
      </div>
      <div class="text-center">
        <a href="login.html">其他身份登录</a>
      </div>
    </div>
    <div class="lockscreen-footer text-center">
      Powered by <a href="http://won.cm">Won</a> Version <?php echo WON_V;?>
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