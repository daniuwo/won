<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html lang="en">
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

<div class="mdui-toolbar mdui-color-theme">
    <a href="javascript:history.back(-1);" class="mdui-btn mdui-btn-icon"><i class="mdui-icon iconfont iconarrow-left-line"></i></a>
    <span class="mdui-typo-title"><?php echo $title;?></span>
    <div class="mdui-toolbar-spacer"></div>
</div>
<section class="mdui-m-a-4" style="text-align: center">
    <?php if ($bool): ?>
    <?php else: ?>
        <i class="iconfont iconerror-warning-line mdui-text-color-red" style="font-size: 4rem;"></i>
    <?php endif ?>
    <div class="mdui-text-color-red-500 mdui-typo-title"><?php echo $msg;?></div>
    <div class="mdui-m-t-4">
        <a href="javascript:history.back(-1);" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-blue-grey-100 mdui-m-r-3">返回上页</a>
        <a href="<?php echo WWW;?>" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">返回首页</a>
    </div>
</section>
    <script src="<?php echo WWW_STATIC;?>mobile/js/ydui.js"></script>
</body>
</html>