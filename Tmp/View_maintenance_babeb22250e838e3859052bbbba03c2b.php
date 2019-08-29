<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="<?php echo WWW_STATIC;?>mobile/css/ydui.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1231984_cqaovolx1kq.css">
    <link href="https://cdn.bootcss.com/mdui/0.4.3/css/mdui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo WWW_STATIC;?>mobile/css/app.css">
    <script src="//cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/mdui/0.4.3/js/mdui.min.js"></script>
    <script src="<?php echo WWW_STATIC;?>mobile/js/app.js"></script>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-deep-purple" style="background:#f1f5f7">

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

    .section-maintenance {
        text-align: center;
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
                        <h6 class="mb-2 mt-2">对于给您带来的不便，我们深表歉意。 <br> 请稍后再回来查看</h6>
                        <a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" href="<?php echo URL('/admin');?>">管理员登录</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="<?php echo WWW_STATIC;?>mobile/js/ydui.js"></script>
</body>
</html>