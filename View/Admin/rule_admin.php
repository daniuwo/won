{include common/head}
{include common/header}
{include common/sidenav}
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
            <button class="btn btn-info btn-sm" id="test2" onclick="openwindow('标题','{#WN_URL('admin','jiekou',['type'=>'menu'])}',2)">增加分组</button>
         </div>
         <div class="box-body table-responsive no-padding no-border">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th style="width: 60px;text-align: center"><input type="checkbox" name="quanxuan"></th>
                     <th style="width: 60px;text-align: center">ID</th>
                     <th>名称</th>
                     <th>昵称</th>
                     <th style="width: 80px;text-align: center">图标</th>
                     <th style="width: 100px;text-align: center">状态</th>
                     <th style="width: 130px;text-align: center">排序</th>
                     <th style="width: 150px;text-align: center">操作</th>
                  </tr>
               </thead>
               <tbody>
                  {foreach $data as $v}
                  <tr>
                     <td class="text-center"><input type="checkbox" name="xuan" value="{$v.id}"></td>
                     <td class="text-center">{$v.id}</td>
                     <td>{$v._name}</td>
                     <td>{$v.name2}</td>
                     <td class="text-center"><i class="{$v.icon}"></i></td>
                     <td class="text-center">
                        {if $v['status']}
                           <span class="text-success">启用</span>
                        {else}
                           <span class="text-danger">隐藏</span>
                        {/if}
                     </td>
                     <td class="text-center">{$v.paixu}</td>
                     <td class="text-center">
                        <button class="btn btn-info btn-sm" onclick="openwindow('编辑','{#WN_URL('admin','jiekou',['type'=>'menu_edit','id'=>$v['id']])}',2)">修改</button>
                        <button class="btn btn-danger btn-sm" onclick="del('{#WN_URL('admin','menu',['type'=>'del','id'=>$v['id']])}')">删除</button>
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
{include common/footer}
{include common/foot}
