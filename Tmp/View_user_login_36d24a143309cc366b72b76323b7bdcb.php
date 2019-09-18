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
    <script>
        var WWW = '<?php echo WWW;?>';
    </script>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-deep-purple" style="background:#f1f5f7">


<section class="g-flexview">
    <div class="mdui-toolbar mdui-color-theme">
        <a href="javascript:history.back(-1);" class="mdui-btn mdui-btn-icon"><i class="mdui-icon iconfont iconarrow-left-line"></i></a>
        <span class="mdui-typo-title"><?php echo $title;?></span>
        <div class="mdui-toolbar-spacer"></div>
    </div>
    <div class="g-scrollview">
        <div class="userlogo">
            <img src="<?php echo WWW_STATIC;?>mobile/img/logo.png">
        </div>
        <div class="content">
            <form id="form">
                <div style="text-align: center">
                    <h1 class="title">你好</h1>
                    <p class="describe">请登录您的帐户</p>
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label mdui-p-t-0">
                    <label class="mdui-textfield-label">用户名</label>
                    <input class="mdui-textfield-input" type="text" name="user" />
                    <i class="mdui-icon iconfont iconuser--line2" style="right: 0"></i>
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label mdui-clearfix mdui-p-t-0">
                    <label class="mdui-textfield-label">密码</label>
                    <input class="mdui-textfield-input" type="password" name="pass"/>
                    <a class="mdui-icon mdui-btn mdui-btn-icon" style="right:0;padding: 0"><i class="iconfont iconeye-off-line"></i></a>
                </div>
                <div class="mdui-clearfix">
                    <a class="mdui-float-right" href="">忘记了密码?</a>
                </div>
                <div class="mdui-m-t-4 mdui-m-x-4" style="text-align: center">
                    <button type="button" class="mdui-btn mdui-btn-raised mdui-btn-block login mdui-color-theme-a200" id="login">登录</button>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <h2>
            没有帐户? <a class="mdui-text-color-deep-purple-a100" href="<?php echo URL('/user','add');?>">现在就注册一个</a>
        </h2>
    </div>
</section>
<style>
    .userlogo{
        text-align: center;
        height: 180px;
    }
    .content{
        background: #fff;
        border-radius: 5px;
        margin: 20px;
        padding: 15px;
        box-shadow: 0 1px 10px -5px rgba(58, 67, 87, 0.25);
    }
    .content .title{
        letter-spacing: 6px;
        font-size: 22px;
        color: #3a4357;
        margin: 0.2rem;
    }
    .content .describe{
        letter-spacing: 6px;
        color: #3a4357;
        font-weight: bold;
    }
    .content .login{
        border-radius: 20px;
        height: 40px;
        line-height: 40px;
        box-shadow: 0 3px 6px -2px rgba(0,0,0,.2), 0 2px 8px 0 rgba(0,0,0,.14), 0 1px 10px -5px rgba(0,0,0,.12);
    }
    .footer h2{
        margin-bottom: 22px;
        font-size: 18px;
        color: #2d3a40;
        text-align: center;
    }
</style>
<script>
    $('#login').click(function(){
        var dataform = $('#form').serialize();
        $.ajax({
            type: "post",
            url: "<?php echo URL('/user','login');?>",
            data: dataform,
            dataType: "json",
            success: function (e) {
                if(e.error){
                    toast(e.msg)
                    setTimeout(() => {
                        if(e.url !='' && e.url != 'NULL' && e.url != 'null'){
                            window.location.href = e.data.url
                        }else{
                            window.location.href = WWW
                        }
                    }, 1500);
                }else{
                    toast(e.msg)
                    if(e.data.type == 'user'){
                        return $('[name="user"]').focus().addClass('mdui-textfield-invalid').parent().addClass('mdui-textfield-invalid-html5')
                    }else if(e.data.type == 'pass'){
                        return $('[name="pass"]').focus().addClass('mdui-textfield-invalid').parent().addClass('mdui-textfield-invalid-html5')
                    }
                }
            }
        });
    });
</script>
    <script src="<?php echo WWW_STATIC;?>mobile/js/ydui.js"></script>
</body>
</html>