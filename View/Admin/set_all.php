
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
        <form class="form-horizontal" action="" method="POST">
            <div class="box-body">
                <input type="hidden" name="ation" value="edit">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">网站名称</label>
                    <div class="col-sm-4 col-md-6">
                        <input type="text" name="wwwname" class="form-control" id="inputEmail3" placeholder="" value="{$config_www.wwwname}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">网站域名</label>
                    <div class="col-sm-4 col-md-6">
                        <input type="text" name="domain" class="form-control" id="inputtext3" placeholder="" value="{$config_www.domain}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">网站关键词(Keywords)</label>
                    <div class="col-sm-4 col-md-6">
                        <input type="text" name="keywords" class="form-control" id="inputtext3" placeholder="" value="{$config_www.keywords}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">网站描述(Description)</label>
                    <div class="col-sm-4 col-md-6">
                        <input type="text" name="description" class="form-control" id="inputtext3" placeholder="" value="{$config_www.description}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">站长邮箱</label>
                    <div class="col-sm-4 col-md-6">
                        <input type="email" name="email" class="form-control" id="inputtext3" placeholder="" value="{$config_www.email}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">站长QQ</label>
                    <div class="col-sm-4 col-md-6">
                        <input type="number" name="qq" class="form-control" id="inputtext3" placeholder="" value="{$config_www.qq}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">备案号</label>
                    <div class="col-sm-4 col-md-6">
                        <input type="number" name="qq" class="form-control" id="inputtext3" placeholder="" value="{$config_www.qq}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">关闭网站</label>
                    <div class="col-sm-4 col-md-6">
                        <select name="weihu" class="form-control">
                            <option value="0" {if $config_www['weihu'] == 0}selected{/if}>开启网站</option>
                            <option value="1" {if $config_www['weihu'] == 1}selected{/if}>关闭网站</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">关站说明</label>
                    <div class="col-sm-4 col-md-6">
                        <textarea name="weihu_msg" id="" cols="30" rows="3" class="form-control" placeholder="输入关站说明,显示到前台">{$config_www.weihu_msg}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtext3" class="col-sm-2 control-label">统计代码</label>
                    <div class="col-sm-4 col-md-6">
                        <textarea name="tongji" id="" cols="30" rows="6" class="form-control" placeholder="第三方统计代码可以输入到这里">{$config_www.tongji}</textarea>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-sm-2"></div>
                <div class="col-sm-4 col-md-6 px-0">
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