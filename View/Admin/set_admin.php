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
   <style>
   .table > thead > tr > th{
      border: 0
   }
   .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
      padding: 8px;
      line-height: 1.42857143;
      vertical-align: inherit;
   }
   </style>
   <!-- Main content -->
   <section class="content">

      <!-- Default box -->
      <div class="box box-info">
         <div class="box-header with-border">
            <button class="btn btn-info btn-sm">增加管理员</button>
         </div>
         <div class="box-body table-responsive no-padding no-border">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th style="width: 20px;text-align: center">UID</th>
                     <th>名称</th>
                     <th>权限</th>
                     <th style="width: 100px;text-align: center">状态</th>
                     <th style="width: 130px;text-align: center">增加时间</th>
                     <th style="width: 150px;text-align: center">操作</th>
                  </tr>
               </thead>
               <tbody>

                  <tr>
                     <td class="text-center">1</td>
                     <td>更新软件</td>
                     <td>
                     <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                     </div>
                     </td>
                     <td class="text-center"><span class="text-success">启用</span></td>
                     <td class="text-center">2019-08-01</td>
                     <td class="text-center">
                        <button class="btn btn-info btn-sm">修改</button>
                        <button class="btn btn-danger btn-sm">删除</button>
                     </td>
                  </tr>
                  <tr>
                     <td>150</td>
                     <td>更新软件</td>
                     <td>
                     <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                     </div>
                     </td>
                     <td class="text-center"><span class="text-red">停用</span></td>
                     <td class="text-center">2019-08-01</td>
                     <td class="text-center">
                        <button class="btn btn-info btn-sm">修改</button>
                        <button class="btn btn-danger btn-sm">删除</button>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
         <!-- /.box-body -->
         <div class="box-footer">
            Footer
         </div>
         <!-- /.box-footer-->
      </div>
      <!-- /.box -->

   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
{include common/footer}
{include common/foot}