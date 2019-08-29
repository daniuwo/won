{include common/head}
<style>
    body {
        background-image: url('{#WWW_STATIC}images/flat-bg.jpg');
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
                                <img class="z-depth-4 circle responsive-img" width="130" src="{#WWW}{$user.avatar.a}" alt="">
                                <h5>{$user.user}</h5>
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

{include common/foot}