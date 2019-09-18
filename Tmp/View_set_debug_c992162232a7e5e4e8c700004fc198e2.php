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
<!-- BEGIN: Header-->
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

    <!-- END: Header-->


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
    <!-- END: SideNav-->
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Blank Page</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Pages</a>
                  </li>
                  <li class="breadcrumb-item active">Blank Page
                  </li>
                </ol>
              </div>
              <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                <ul class="dropdown-content" id="dropdown1" tabindex="0">
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                  <li class="divider" tabindex="-1"></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section">

            </div><!-- START RIGHT SIDEBAR NAV -->
            <aside id="right-sidebar-nav">
               <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                  <div class="row">
                     <div class="slide-out-right-title">
                        <div class="col s12 border-bottom-1 pb-0 pt-1">
                           <div class="row">
                              <div class="col s2 pr-0 center">
                                 <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                              </div>
                              <div class="col s10 pl-0">
                                 <ul class="tabs">
                                    <li class="tab col s4 p-0">
                                       <a href="#messages" class="active">
                                          <span>Messages</span>
                                       </a>
                                    </li>
                                    <li class="tab col s4 p-0">
                                       <a href="#settings">
                                          <span>Settings</span>
                                       </a>
                                    </li>
                                    <li class="tab col s4 p-0">
                                       <a href="#activity">
                                          <span>Activity</span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slide-out-right-body">
                        <div id="messages" class="col s12">
                           <div class="collection border-none">
                              <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                              <ul class="collection p-0">
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Elizabeth Elliott</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                    </div>
                                    <span class="secondary-content medium-small">5.00 AM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-1.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Mary Adams</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                    </div>
                                    <span class="secondary-content medium-small">4.14 AM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-off avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-2.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Caleb Richards</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                    </div>
                                    <span class="secondary-content medium-small">4.14 AM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-3.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Caleb Richards</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                                    </div>
                                    <span class="secondary-content medium-small">9.00 PM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-4.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">June Lane</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                                    </div>
                                    <span class="secondary-content medium-small">4.14 AM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-off avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-5.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Edward Fletcher</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                                    </div>
                                    <span class="secondary-content medium-small">5.15 PM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-6.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Crystal Bates</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                                    </div>
                                    <span class="secondary-content medium-small">8.00 AM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-off avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Nathan Watts</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                                    </div>
                                    <span class="secondary-content medium-small">9.53 PM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-off avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-8.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Willard Wood</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                                    </div>
                                    <span class="secondary-content medium-small">4.20 AM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-1.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Ronnie Ellis</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                                    </div>
                                    <span class="secondary-content medium-small">5.20 AM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-9.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Daniel Russell</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                    </div>
                                    <span class="secondary-content medium-small">12.00 AM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-off avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-10.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Sarah Graves</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                                    </div>
                                    <span class="secondary-content medium-small">11.14 PM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-off avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-11.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Andrew Hoffman</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                                    </div>
                                    <span class="secondary-content medium-small">7.30 PM</span>
                                 </li>
                                 <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"
                                       ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-12.png" alt="avatar" />
                                       <i></i>
                                    </span>
                                    <div class="user-content">
                                       <h6 class="line-height-0">Camila Lynch</h6>
                                       <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                                    </div>
                                    <span class="secondary-content medium-small">2.00 PM</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div id="settings" class="col s12">
                           <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
                           <ul class="collection border-none">
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>Notifications</span>
                                    <div class="switch right">
                                       <label>
                                          <input checked type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>Show recent activity</span>
                                    <div class="switch right">
                                       <label>
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>Show recent activity</span>
                                    <div class="switch right">
                                       <label>
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>Show Task statistics</span>
                                    <div class="switch right">
                                       <label>
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>Show your emails</span>
                                    <div class="switch right">
                                       <label>
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>Email Notifications</span>
                                    <div class="switch right">
                                       <label>
                                          <input checked type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                           <ul class="collection border-none">
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>System Logs</span>
                                    <div class="switch right">
                                       <label>
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>Error Reporting</span>
                                    <div class="switch right">
                                       <label>
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>Applications Logs</span>
                                    <div class="switch right">
                                       <label>
                                          <input checked type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>Backup Servers</span>
                                    <div class="switch right">
                                       <label>
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                              <li class="collection-item border-none mt-3">
                                 <div class="m-0">
                                    <span>Audit Logs</span>
                                    <div class="switch right">
                                       <label>
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                       </label>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div id="activity" class="col s12">
                           <div class="activity">
                              <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                              <ul class="collection with-header">
                                 <li class="collection-item">
                                    <div class="font-weight-900">
                                       Homepage mockup design <span class="secondary-content">Just now</span>
                                    </div>
                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                    <span class="new badge amber" data-badge-caption="Important"> </span>
                                 </li>
                                 <li class="collection-item">
                                    <div class="font-weight-900">
                                       Melissa liked your activity Drinks. <span class="secondary-content">10 mins</span>
                                    </div>
                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                    <span class="new badge light-green" data-badge-caption="Resolved"></span>
                                 </li>
                                 <li class="collection-item">
                                    <div class="font-weight-900">
                                       12 new users registered <span class="secondary-content">30 mins</span>
                                    </div>
                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                 </li>
                                 <li class="collection-item">
                                    <div class="font-weight-900">
                                       Tina is attending your activity <span class="secondary-content">2 hrs</span>
                                    </div>
                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                 </li>
                                 <li class="collection-item">
                                    <div class="font-weight-900">
                                       Josh is now following you <span class="secondary-content">5 hrs</span>
                                    </div>
                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                    <span class="new badge red" data-badge-caption="Pending"></span>
                                 </li>
                              </ul>
                              <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                              <ul class="collection with-header">
                                 <li class="collection-item">
                                    <div class="font-weight-900">
                                       New order received urgent <span class="secondary-content">Just now</span>
                                    </div>
                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                 </li>
                                 <li class="collection-item">
                                    <div class="font-weight-900">System shutdown. <span class="secondary-content">5 min</span></div>
                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                    <span class="new badge blue" data-badge-caption="Urgent"> </span>
                                 </li>
                                 <li class="collection-item">
                                    <div class="font-weight-900">
                                       Database overloaded 89% <span class="secondary-content">20 min</span>
                                    </div>
                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                 </li>
                              </ul>
                              <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                              <ul class="collection with-header">
                                 <li class="collection-item">
                                    <div class="font-weight-900">System error <span class="secondary-content">10 min</span></div>
                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                 </li>
                                 <li class="collection-item">
                                    <div class="font-weight-900">
                                       Production server down. <span class="secondary-content">1 hrs</span>
                                    </div>
                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                    <span class="new badge blue" data-badge-caption="Urgent"></span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Slide Out Chat -->
               <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                  <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                     <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                  </li>
                  <li class="chat-body">
                     <ul class="collection">
                        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                           <span class="avatar-status avatar-online avatar-50"
                              ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           </span>
                           <div class="user-content speech-bubble">
                              <p class="medium-small">hello!</p>
                           </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                           <div class="user-content speech-bubble-right">
                              <p class="medium-small">How can we help? We're here for you!</p>
                           </div>
                        </li>
                        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                           <span class="avatar-status avatar-online avatar-50"
                              ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           </span>
                           <div class="user-content speech-bubble">
                              <p class="medium-small">I am looking for the best admin template.?</p>
                           </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                           <div class="user-content speech-bubble-right">
                              <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
                           </div>
                        </li>

                        <li class="collection-item display-grid width-100 center-align">
                           <p>8:20 a.m.</p>
                        </li>

                        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                           <span class="avatar-status avatar-online avatar-50"
                              ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           </span>
                           <div class="user-content speech-bubble">
                              <p class="medium-small">Ohh! very nice</p>
                           </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                           <div class="user-content speech-bubble-right">
                              <p class="medium-small">Thank you.</p>
                           </div>
                        </li>
                        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                           <span class="avatar-status avatar-online avatar-50"
                              ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           </span>
                           <div class="user-content speech-bubble">
                              <p class="medium-small">How can I purchase it?</p>
                           </div>
                        </li>

                        <li class="collection-item display-grid width-100 center-align">
                           <p>9:00 a.m.</p>
                        </li>

                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                           <div class="user-content speech-bubble-right">
                              <p class="medium-small">From ThemeForest.</p>
                           </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                           <div class="user-content speech-bubble-right">
                              <p class="medium-small">Only $24</p>
                           </div>
                        </li>
                        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                           <span class="avatar-status avatar-online avatar-50"
                              ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           </span>
                           <div class="user-content speech-bubble">
                              <p class="medium-small">Ohh! Thank you.</p>
                           </div>
                        </li>
                        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                           <span class="avatar-status avatar-online avatar-50"
                              ><img src="<?php echo WWW_STATIC;?>admin/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           </span>
                           <div class="user-content speech-bubble">
                              <p class="medium-small">I will purchase it for sure.</p>
                           </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                           <div class="user-content speech-bubble-right">
                              <p class="medium-small">Great, Feel free to get in touch on</p>
                           </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                           <div class="user-content speech-bubble-right">
                              <p class="medium-small">https://pixinvent.ticksy.com/</p>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <li class="center-align chat-footer">
                     <form class="col s12" onsubmit="slide_out_chat()" action="javascript:void(0);">
                        <div class="input-field">
                           <input id="icon_prefix" type="text" class="search" />
                           <label for="icon_prefix">Type here..</label>
                           <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
                        </div>
                     </form>
                  </li>
               </ul>
            </aside>
            <!-- END RIGHT SIDEBAR NAV -->

          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
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