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
    /*----------------------------------------
    Maintenance
    ------------------------------------------*/
    .section-maintenance {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        overflow: hidden;

        height: 100vh;

        background: #fff;

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

    .section-maintenance #maintenance h6 {
        line-height: 1.7rem;
    }

    .section-maintenance #maintenance .maintenance-img {
        width: 35%;
    }

    @media screen and (max-width: 540px) {
        .section.section-maintenance .error-code {
            font-size: 2rem !important;
        }
    }
</style>
<div class="row">
    <div class="col s12">
        <div class="container">
            <div class="section p-0 m-0 height-100vh section-maintenance">
                <div class="row">
                    <!-- Maintenance -->
                    <div id="maintenance" class="col s12 center-align white">
                        <img src="<?php echo WWW_STATIC;?>images/maintenance.png"
                            class="responsive-img maintenance-img" alt="">
                        <h4 class="error-code">网站正在维护中</h4>
                        <h6 class="mb-2 mt-2"><?php echo $msg;?></h6>
                        <a class="btn waves-effect waves-light" href="<?php echo URL('/admin');?>">管理员登录</a>
                    </div>
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