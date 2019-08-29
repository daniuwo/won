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
    <link rel="stylesheet" href="<?php echo WWW_STATIC;?>mobile/css/app.css">
    <script src="//cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

<div class="g-flexview">
    <div class="g-scrollview">
        <header class="m-navbar">
            <a href="javascript:history.back(-1);" class="navbar-item"><i class="back-ico"></i></a>
            <div class="navbar-center"><span class="navbar-title"><?php echo $title;?></span></div>
            <a href="javascript:history.back(-1);" class="navbar-item">创建</a>
        </header>
        <div class="m-celltitle" style="margin-top:15px;">创建一个布局模块</div>
        <div class="m-cell">
            <div class="cell-item">
                <div class="cell-left">名称设置：</div>
                <div class="cell-right"><input type="text" pattern="[0-9]*" class="cell-input" placeholder="用于自我辨别" autocomplete="off" /></div>
            </div>
            <div class="cell-item">
                <div class="cell-left">先后排序：</div>
                <div class="cell-right"><input type="number" pattern="[0-9]*" class="cell-input" placeholder="模块排序" autocomplete="off" /></div>
            </div>
            <div class="cell-item">
                <div class="cell-left">模块选择：</div>
                <label class="cell-right cell-arrow">
                    <select class="cell-select">
                        <option value="">点我选择</option>
                        <option value="1">空白页面</option>
                        <option value="2">论坛页面</option>
                        <option value="3">论坛</option>
                    </select>
                </label>
            </div>
            <div class="cell-item">
                <div class="cell-left">模块状态：</div>
                <label class="cell-right cell-arrow">
                    <select class="cell-select">
                        <option value="">点我选择</option>
                        <option value="1">显示</option>
                        <option value="2">隐藏</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="m-celltitle">这里是另外一个标题</div>
        <div class="m-cell">
            <div class="cell-item">
                <div class="cell-left">手机号：</div>
                <div class="cell-right"><input type="number" pattern="[0-9]*" class="cell-input" placeholder="请输入手机号" autocomplete="off" /></div>
            </div>
            <div class="cell-item">
                <label class="cell-right cell-arrow">
                    <select class="cell-select">
                        <option value="">支付方式</option>
                        <option value="1">支付宝</option>
                        <option value="2">微信</option>
                        <option value="3">财付通</option>
                    </select>
                </label>
            </div>
            <div class="cell-item">
                <div class="cell-left">性别：</div>
                <label class="cell-right cell-arrow">
                    <select class="cell-select">
                        <option value="">请选择性别</option>
                        <option value="1">男</option>
                        <option value="2">女</option>
                        <option value="3">未知</option>
                    </select>
                </label>
            </div>
        </div>
    </div>
    <div style="text-align: center;padding: 10px 0 20px;">
    <div>
        Powered by <a href="#" style="color: #2dc5d8;">蜗牛系统</a> Version 1.0
    </div>
</div>
</div>

    <script src="<?php echo WWW_STATIC;?>mobile/js/ydui.js"></script>
</body>
</html>