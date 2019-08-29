<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html class="loading" lang="zh" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
   <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
   <meta name="author" content="ThemeSelect">
   <title><?php echo $title;?> | 蜗牛后台管理程序</title>
   <!-- BEGIN: VENDOR CSS-->
   <link rel="stylesheet" type="text/css" href="<?php echo WWW_STATIC;?>admin/app-assets/css/themes/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo WWW_STATIC;?>admin/app-assets/css/themes/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo WWW_STATIC;?>admin/app-assets/css/themes/style.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo WWW_STATIC;?>admin/app-assets/css/themes/custom.css">
    <!-- END: Custom CSS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">



<style>
    body {
        background-image: url('<?php echo WWW_STATIC;?>images/flat-bg.jpg');
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        background-size: cover;
    }

    #lock-screen {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;

        height: 100vh;

        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    #lock-screen .card-panel.border-radius-6.forgot-card {
        margin-left: 0 !important;
    }
</style>
<div class="row">
    <div class="col s12">
        <div class="container">
            <div id="lock-screen" class="row">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 forgot-card bg-opacity-8">
                    <form class="login-form" method="POST">
                        <div class="row">
                            <div class="input-field col s12 center-align mt-10">
                                <img class="z-depth-4 circle responsive-img" width="130" src="<?php echo WWW;?><?php echo $user['avatar']['a'];?>" alt="">
                                <h5><?php echo $user['user'];?></h5>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="password" type="password" name="pass">
                                <label for="password">请输入登录密码</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo WWW_STATIC;?>admin/app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?php echo WWW_STATIC;?>admin/app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="<?php echo WWW_STATIC;?>admin/app-assets/js/custom-script.js" type="text/javascript"></script>
    <script src="<?php echo WWW_STATIC;?>admin/app-assets/js/customizer.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>