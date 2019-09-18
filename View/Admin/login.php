{include common/head}
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
      <div class="lockscreen-name">{$user.user}</div>
    
      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
          <img src="{#WWW}{$user.avatar.b}" alt="User Image">
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
      Powered by <a href="http://won.cm">Won</a> Version {#WON_V}
    </div>
</div>

{include common/foot}