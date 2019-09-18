<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{#WWW}{$user.avatar.b}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="text-transform: capitalize;">{$user.user}</p>
          <a href="#"><i class="fa fa-circle" style="color:#00a65a"></i> 在线</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        {foreach $sidebar as $v}
          {if $v['menutype'] == 3}
          <li class="header">{$v.name}</li>
          {else}
            {if empty($v['chile'])}
              <li class=" {if is_active($v['id'])}active{/if}"><a href="{#WN_URL($v['name2'])}"><i class="block {$v.icon}"></i> <span>{$v.name}</span></a></li>
            {else}
              <li class="treeview {if is_active($v['id'])}active{/if}">
                <a href="#">
                  <i class="block {$v.icon}"></i>
                  <span>{$v.name}</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  {foreach $v['chile'] as $val}
                  <li class="{if X('get.s') == $val['name2']}active{/if}"><a href="{#WN_URL($val['name2'])}"><i class="fa fa-circle-o"></i> {$val.name}</a></li>
                  {/foreach}
                </ul>
              </li>
            {/if}
          {/if}
        {/foreach}
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>