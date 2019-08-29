{include common/header}

<section class="g-flexview">
    <div class="mdui-toolbar mdui-color-theme">
        <a href="javascript:history.back(-1);" class="mdui-btn mdui-btn-icon"><i class="mdui-icon iconfont iconarrow-left-line"></i></a>
        <span class="mdui-typo-title">{$title}</span>
    </div>
    <div class="g-scrollview">
        <div class="content">
            <form action="" id="form">
                <div style="text-align: center">
                    <h1 class="title">创建帐号</h1>
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label mdui-p-t-0">
                    <label class="mdui-textfield-label">用户名</label>
                    <input class="mdui-textfield-input" type="text" name="user" pattern="^.*(?=.{5,})(?=.*[0-9a-zA-Z]).*$" required />
                    <div class="mdui-textfield-error">用户名至少 5 位，且包含字母数字</div>
                    <div class="mdui-textfield-helper">请输入至少 5 位，且包含字母数字的密码</div>
                    <i class="mdui-icon iconfont iconuser--line2" style="right: 0"></i>
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label mdui-p-t-0">
                    <label class="mdui-textfield-label">Email</label>
                    <input class="mdui-textfield-input" type="email" name="email" required />
                    <div class="mdui-textfield-error">邮箱格式错误</div>
                    <div class="mdui-textfield-helper">你的邮箱地址</div>
                    <i class="mdui-icon iconfont iconmail-line" style="right: 0"></i>
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label mdui-clearfix mdui-p-t-0">
                    <label class="mdui-textfield-label">密码</label>
                    <input class="mdui-textfield-input" type="password" name="pass1" pattern="^.*(?=.{6,})(?=.*[0-9a-zA-Z]).*$" required />
                    <div class="mdui-textfield-error">密码至少 6 位，且包含字母数字</div>
                    <div class="mdui-textfield-helper">请输入至少 6 位，且包含字母数字的密码</div>
                    <a class="mdui-icon mdui-btn mdui-btn-icon" style="right:0;padding: 0"><i class="iconfont iconlock-password-line"></i></a>
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label mdui-clearfix mdui-p-t-0">
                    <label class="mdui-textfield-label">重复密码</label>
                    <input class="mdui-textfield-input" type="password" name="pass2" pattern="^.*(?=.{6,})(?=.*[0-9a-zA-Z]).*$" required />
                    <div class="mdui-textfield-error">两次输入的密码不一致</div>
                    <div class="mdui-textfield-helper">请重新输入密码</div>
                    <a class="mdui-icon mdui-btn mdui-btn-icon" style="right:0;padding: 0"><i class="iconfont iconlock-password-line"></i></a>
                </div>
                <select class="mdui-select mdui-m-y-2" mdui-select style="width:100%" name="sex">
                    <option value="" selected>性别</option>
                    <option value="1">男生</option>
                    <option value="2">女生</option>
                </select>
                <div class="mdui-m-y-0">
                    <label class="mdui-checkbox">
                        <input type="checkbox" name="xieyi" />
                        <i class="mdui-checkbox-icon"></i>
                        同意用户注册协议
                    </label>
                </div>
                <div class="mdui-m-t-4 mdui-m-x-4" style="text-align: center">
                    <button type="button" class="mdui-btn mdui-btn-raised mdui-btn-block login mdui-color-theme-a200" id="add">提交</button>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <h2>
            已有帐号? <a class="mdui-text-color-deep-purple-a100" href="{#URL('/user','login')}">现在登录</a>
        </h2>
    </div>
</section>
<style>
    .mdui-select{
        width: 100%;
        margin: 10px 0;
    }
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
    $('#add').click(function(){
        var dataform = $('#form').serialize();
            // 输入验证
            if($('[name="user"]').val() == ''){
                return $('[name="user"]').focus().addClass('mdui-textfield-invalid').parent().addClass('mdui-textfield-invalid-html5')
            }else if($('[name="email"]').val() == '' || !$('[name="email"]').val().match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/)){
                return $('[name="email"]').focus().addClass('mdui-textfield-invalid').parent().addClass('mdui-textfield-invalid-html5')
            }else if($('[name="pass1"]').val() == ''){
                return $('[name="pass1"]').focus().addClass('mdui-textfield-invalid').parent().addClass('mdui-textfield-invalid-html5')
            }else if($('[name="pass2"]').val() == '' || $('[name="pass2"]').val() != $('[name="pass1"]').val()){
                return $('[name="pass2"]').focus().addClass('mdui-textfield-invalid').parent().addClass('mdui-textfield-invalid-html5')
            }else if($('[name="sex"] option:selected').val() == ''){
                return mdui.snackbar({
                    message: '请选择一个性别',
                });
            }else if(!$('[type="checkbox"]').is(':checked')){
                return mdui.snackbar({
                    message: '必须勾选用户注册协议',
                });
            }
            $.ajax({
                type: "post",
                url: "{#URL('/user','add')}",
                data: dataform,
                dataType: "json",
                success: function (e) {
                    if(e.error){
                        toast(e.msg)
                    }else{
                        toast(e.msg)
                    }
                }
            });
        
    });
</script>
{include common/footer}