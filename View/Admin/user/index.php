{include ../common/head}
{include ../common/header}
{include ../common/sidenav}
<style>
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{    vertical-align: inherit;}
</style>
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
            <button class="btn btn-info btn-sm" id="test2" onclick="openwindow('新建组','{#WN_URL('admin','group',['type'=>'add'])}',2)">增加分组</button>
         </div>
         <div class="box-body table-responsive no-padding no-border">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th style="width: 60px;text-align: center">UID</th>
                     <th>帐号</th>
                     <th style="width: 100px;text-align: center">用户名称</th>
                     <th style="width: 100px;text-align: center">Email</th>
                     <th style="width: 100px;text-align: center">手机号</th>
                     <th style="width: 100px;text-align: center">用户组</th>
                     <th style="width: 100px;text-align: center">金币</th>
                     <th style="width: 100px;text-align: center">积分</th>
                     <th style="width: 100px;text-align: center">余额</th>
                     <th style="width: 180px;text-align: center">注册时间</th>
                     <th style="width: 180px;text-align: center">登录时间</th>
                     <th style="width: 150px;text-align: center">操作</th>
                  </tr>
               </thead>
               <tbody>
                  {foreach $data as $v}
                  <tr>
                     <td class="text-center">{$v.uid}</td>
                     <td>{$v.user}</td>
                     <td class="text-center">{$v.name}</td>
                     <td class="text-center">{$v.email}</td>
                     <td class="text-center">{$v.mobile}</td>
                     <td class="text-center"><span style="color:{$v.group.color}">{$v.group.name}</span></td>
                     <td class="text-center">{$v.name}</td>
                     <td class="text-center">{$v.name}</td>
                     <td class="text-center">{$v.name}</td>
                     <td class="text-center">
                         {#date('Y-m-d H:i',$v['atime'])}
                     </td>
                     <td class="text-center">{#date('Y-m-d H:i',$v['dtime'])}</td>
                     <td class="text-center">
                        <button class="btn btn-info btn-sm" onclick="openwindow('编辑组','{#WN_URL('admin','group',['type'=>'edit','uid'=>$v['uid']])}',2)">修改</button>
                        <button class="btn btn-danger btn-sm">删除</button>
                     </td>
                  </tr>
                  {/foreach}
               </tbody>
            </table>
         </div>
         <!-- /.box-body -->
         <div class="box-footer">
            <!-- Footer -->
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>

<!-- /.content-wrapper -->
{include ../common/footer}
{include ../common/foot}
