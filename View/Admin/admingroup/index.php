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
            <button class="btn btn-info btn-sm" id="test2" onclick="openwindow('新建组','{#WN_URL('admin','admin_group',['type'=>'add'])}',2)">增加分组</button>
         </div>
         <div class="box-body table-responsive no-padding no-border">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th style="width: 60px;text-align: center">UID</th>
                     <th>头衔</th>
                     <th style="width: 100px;text-align: center">头衔颜色</th>
                     <th style="width: 150px;text-align: center">状态</th>
                     <th style="width: 180px;text-align: center">增加时间</th>
                     <th style="width: 150px;text-align: center">操作</th>
                  </tr>
               </thead>
               <tbody>
                  {foreach $data as $v}
                  <tr>
                     <td class="text-center">{$v.role_id}</td>
                     <td><span style="color:{$v.color}">{$v.name}</span></td>
                     <td class="text-center"><span style="color:{$v.color}">{$v.color}</span></td>
                     <td class="text-center">
                        {if $v['status'] == 1}
                        <span class="text-success">启用</span>
                        {else}
                        <span class="text-danger">禁用</span>
                        {/if}
                     </td>
                     <td class="text-center">2019-08-01</td>
                     <td class="text-center">
                        <button class="btn btn-info btn-sm" onclick="openwindow('编辑组','{#WN_URL('admin','admin_group',['type'=>'edit','role_id'=>$v['role_id']])}',2)">修改</button>
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
