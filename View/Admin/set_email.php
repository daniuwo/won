
{include common/head}
{include common/header}
{include common/sidenav}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         {$title}
         <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="{#WN_URL('amdin')}"><i class="fa fa-dashboard"></i> 首页</a></li>
         <!-- <li><a href="#">{$title}</a></li> -->
         <li class="active">{$title}</li>
      </ol>
   </section>

   <!-- Main content -->
   <section class="content">

      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">参数设置</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="" method="POST" id="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">SMTP</label>
                    <div class="col-sm-10">
                        <input type="text" name="smtp" class="form-control" id="inputEmail3" placeholder="" value="{if isset($config_email['smtp'])}{$config_email.smtp}{/if}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">端口</label>
                    <div class="col-sm-5">
                        <input type="text" name="port" class="form-control" id="inputtext3" placeholder="" value="{if isset($config_email['port'])}{$config_email.port}{/if}">
                    </div>
                    <div class="col-sm-5">
                        <select name="secure" class="form-control">
                           <option value="" {if isset($config_email['secure'])&& empty($config_email['secure'])}selected{/if}>不加密 </option> 
                           <option value="ssl" {if isset($config_email['secure'])&&$config_email['secure']=='ssl' }selected{/if}>SSL加密 </option> 
                           <option value="tls" {if isset($config_email['secure'])&&$config_email['secure']=='tls' }selected{/if}>TLS加密 </option> 
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">帐号</label>
                    <div class="col-sm-10">
                        <input type="text" name="user" class="form-control" id="inputtext3" placeholder="" value="{if isset($config_email['user'])}{$config_email.user}{/if}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-10">
                        <input type="password" name="pass" class="form-control" id="inputtext3" placeholder="" value="{if isset($config_email['pass'])}{$config_email.pass}{/if}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">发信帐号</label>
                    <div class="col-sm-10">
                        <input type="text" name="sendemail" class="form-control" id="inputtext3" placeholder="" value="{if isset($config_email['sendemail'])}{$config_email.sendemail}{/if}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">测试发送</label>
                    <div class="col-sm-5">
                        <input type="text" name="testemail" class="form-control" id="inputtext3" value="{if isset($config_email['testemail'])}{$config_email.testemail}{/if}" placeholder="输入收信邮箱">
                        <span class="help-block text-red">测试发送前请先点击保存</span>
                    </div>
                    <div class="col-sm-5">
                        <button type="button" class="btn btn-info" id="testsend">发送</button>
                    </div>
                </div>
        
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-sm-2"></div>
                <div class="col-sm-10 px-0">
                        <button type="submit" class="btn btn-info">登入</button>
                </div>
            </div>
            <!-- /.box-footer -->
        </form>
        </div>
      <!-- /.box -->

   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
{include common/footer}
{include common/foot}

   <script>
      $('#testsend').click(function() {
         var dataform = $('#form').serialize();
         $(this).text('发送中').addClass('disabled');

         $.ajax({
            type: "post",
            url: "{#WN_URL('admin','testemail')}",
            data: dataform,
            dataType: "json",
            success: function(e) {
               if (e.error) {
                  swal("成功", e.msg, "success")
                  $('#testsend').html('发送').removeClass('disabled');
               } else {
                  swal("失败", e.msg, "error")
                  $('#testsend').html('发送').removeClass('disabled');
               }
            }
         });

      })
   </script>