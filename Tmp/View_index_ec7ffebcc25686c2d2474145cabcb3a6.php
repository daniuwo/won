<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?> | 蜗牛后台管理程序<?php echo $conf['title2'];?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.4.1 -->
  <link href="https://cdn.bootcss.com/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome 4.7.0 -->
  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Ionicons 2.0 -->
  <link href="https://cdn.bootcss.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
  <!-- Toastr -->
  <link href="https://cdn.bootcss.com/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link href="https://cdn.bootcss.com/admin-lte/2.4.17/css/AdminLTE.css" rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- <link rel="stylesheet" href="<?php echo WWW_STATIC;?>admin/dist/css/skins/_all-skins.min.css"> -->
  <link rel="stylesheet" href="<?php echo WWW_STATIC;?>admin/dist/css/skins/_all-skins.css">
  <link rel="stylesheet" href="<?php echo WWW_STATIC;?>admin/dist/css/won.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition sidebar-mini fixed skin-white-blue">
<div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>W</b>on</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>蜗牛</b>建站系统</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo WWW;?><?php echo $user['avatar']['b'];?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        <?php echo $user['user'];?>
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo WWW;?><?php echo $user['avatar']['b'];?>" class="user-image" alt="User Image">
              <span class="hidden-xs" style="text-transform: capitalize;"><?php echo $user['user'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo WWW;?><?php echo $user['avatar']['b'];?>" class="img-circle" alt="User Image">

                <p style="text-transform: capitalize;">
                 <?php echo $user['user'];?> - 超级管理员
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo WWW;?><?php echo $user['avatar']['b'];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="text-transform: capitalize;"><?php echo $user['user'];?></p>
          <a href="#"><i class="fa fa-circle" style="color:#00a65a"></i> 在线</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <?php foreach ($sidebar as $v): ?>
          <?php if ($v['menutype'] == 3): ?>
          <li class="header"><?php echo $v['name'];?></li>
          <?php else: ?>
            <?php if (empty($v['chile'])): ?>
              <li class=" <?php if (is_active($v['id'])): ?>active<?php endif ?>"><a href="<?php echo WN_URL($v['name2']);?>"><i class="block <?php echo $v['icon'];?>"></i> <span><?php echo $v['name'];?></span></a></li>
            <?php else: ?>
              <li class="treeview <?php if (is_active($v['id'])): ?>active<?php endif ?>">
                <a href="#">
                  <i class="block <?php echo $v['icon'];?>"></i>
                  <span><?php echo $v['name'];?></span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <?php foreach ($v['chile'] as $val): ?>
                  <li class="<?php if (X('get.s') == $val['name2']): ?>active<?php endif ?>"><a href="<?php echo WN_URL($val['name2']);?>"><i class="fa fa-circle-o"></i> <?php echo $val['name'];?></a></li>
                  <?php endforeach ?>
                </ul>
              </li>
            <?php endif ?>
          <?php endif ?>
        <?php endforeach ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<style>
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{    vertical-align: inherit;}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <?php echo $title;?>
         <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo WN_URL('amdin');?>"><i class="fa fa-dashboard"></i> 首页</a></li>
         <!-- <li><a href="#"><?php echo $title;?></a></li> -->
         <li class="active"><?php echo $title;?></li>
      </ol>
   </section>

   <!-- Main content -->
   <section class="content">
   
      <!-- Default box -->
      <div class="box box-info">
         <div class="box-header with-border">
            <button class="btn btn-info btn-sm" id="test2" onclick="openwindow('新建组','<?php echo WN_URL('admin','group',['type'=>'add']);?>',2)">增加分组</button>
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
                  <?php foreach ($data as $v): ?>
                  <tr>
                     <td class="text-center"><?php echo $v['uid'];?></td>
                     <td><?php echo $v['user'];?></td>
                     <td class="text-center"><?php echo $v['name'];?></td>
                     <td class="text-center"><?php echo $v['email'];?></td>
                     <td class="text-center"><?php echo $v['mobile'];?></td>
                     <td class="text-center"><span style="color:<?php echo $v['group']['color'];?>"><?php echo $v['group']['name'];?></span></td>
                     <td class="text-center"><?php echo $v['name'];?></td>
                     <td class="text-center"><?php echo $v['name'];?></td>
                     <td class="text-center"><?php echo $v['name'];?></td>
                     <td class="text-center">
                         <?php echo date('Y-m-d H:i',$v['atime']);?>
                     </td>
                     <td class="text-center"><?php echo date('Y-m-d H:i',$v['dtime']);?></td>
                     <td class="text-center">
                        <button class="btn btn-info btn-sm" onclick="openwindow('编辑组','<?php echo WN_URL('admin','group',['type'=>'edit','uid'=>$v['uid']]);?>',2)">修改</button>
                        <button class="btn btn-danger btn-sm">删除</button>
                     </td>
                  </tr>
                  <?php endforeach ?>
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
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
<style>
#control-sidebar-theme-demo-options-tab .form-group p{
   font-size:12px;
}
</style>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">近期活动</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">兰登诞辰纪念日</h4>

                <p>将于4月24日23日</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">佛罗多更新了他的档案</h4>

                <p>新手机+1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">诺拉加入邮件列表</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254已执行</h4>

                <p>执行时间5秒</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">任务进度</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                自定义模板设计
                 <span class="label label-danger pull-right">70％</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                更新恢复
                 <span class="label label-success pull-right">95％</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel整合
                 <span class="label label-warning pull-right">50％</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                后端框架
                 <span class="label label-primary pull-right">68％</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">统计选项卡内容</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">常规设置</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              报告面板用法
              <input type="checkbox" class="pull-right" checked="">
            </label>

            <p>
              有关此常规设置选项的一些信息
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              允许邮件重定向
              <input type="checkbox" class="pull-right" checked="">
            </label>

            <p>
              其他选项可供选择
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              在帖子中公开作者姓名
              <input type="checkbox" class="pull-right" checked="">
            </label>

            <p>
              允许用户在博客帖子中显示他的名字
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">聊天设置</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              告诉我在线
              <input type="checkbox" class="pull-right" checked="">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              关闭通知
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              删除聊天记录
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
    <!-- jQuery 3 -->
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="https://cdn.bootcss.com/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="https://cdn.bootcss.com/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script>
    <!-- FastClick -->
    <script src="https://cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.bootcss.com/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- Layer -->
    <script src="https://cdn.bootcss.com/layer/2.3/layer.js"></script>
    <!-- jquery toastr -->
    <script src="https://cdn.bootcss.com/toastr.js/2.1.4/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo WWW_STATIC;?>admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo WWW_STATIC;?>admin/dist/js/won.js"></script>
    <script>
      $(document).ready(function () {
        $('.sidebar-menu').tree()
      })
    </script>
  </body>
</html>
