<?php
// +------------------------------------------------------
// | Description: Admin控制器
// | Author: 红着自己玩 <956716282@qq.com>
// | Date: 2019-08-29 10:21:18 
// | LastEditors: 红着自己玩 <956716282@qq.com>
// | LastEditTime: 2019-09-18 09:57:39 
// | Github: https://github.com/daniuwo/won.git
// | Copyright (c) 2019 http://won.cm All rights reserved.
// +------------------------------------------------------
namespace Action;

class Admin extends Rbac
{
    public function __construct()
    {
        parent::__construct();
        if (!IS_LOGIN) {
            header('Location: ' . URL('user', 'login'));
            //exit('请登录前台!');
            exit;
        }
        // 设置后台模板
        $this->view = 'Admin';
        session('[start]');
        $md5 = session('admin');

        //echo $md5.'|';
        if (empty($md5)) {
            $this->login();
            exit();
        }
        $sidebar = S('menu')->select('*',[
            'ation[!]'=>1,
            'ismenu'=>1,
            'ORDER'=>['paixu']
        ]);
        $sidebar = tree($sidebar);
        $this->v('sidebar',$sidebar);
    }
    public function index()
    {
        $this->v('title', '仪表盘');
        return $this->display('index');
    }
    // 网站设置
    public function set()
    {
        $type = X('type');
        $Config = S('config');
        if ($type == 'all') {
            
            if (IS_POST) {
                $serialize = serialize($_POST);
                $Config->update(['config_www' => $serialize]);
                return $this->msg('修改成功');
            }
            $this->v('title', '全局设置');
            $this->v('config_www', $this->_conf);
            return $this->display('set_all');
        } elseif ($type == 'admin') {
            $this->v('title', '管理员设置');
            return $this->display('set_admin');
        } elseif ($type == 'email') {
            if (IS_POST) {
                $serialize = serialize($_POST);
                $Config->update(['config_email' => $serialize]);
                return $this->msg('修改成功');
            }
            $this->v('config_email', $this->_conf['config_email']);
            $this->v('title', '邮箱配置');
            return $this->display('set_email');
        } elseif ($type == 'userop') {
            $this->v('title', '用户相关设置');
            return $this->display('set_user');
        } elseif ($type == 'debug') {
            $this->v('title', '登录设置');
            return $this->display('set_debug');
        }
    }
    // 用户管理
    public function Users()
    {
        $this->v('title', '用户管理');
        $type = X('type');
        $this->view = 'Admin/user';
        if($type == 'add'){
            return $this->display('add');
        }elseif($type == 'edit'){
            return $this->display('edit');
        }else{
            $User = S('user');
            $RoleUser = S('role_user');
            // 查询用户
            $data = $User->select('*');
            foreach($data as &$v){
                $v['group'] = $RoleUser->find([
                    '[>]role'=>['role_id'=>'role_id']
                ],['role.name','role.color'],['role_user.uid'=>$v['uid']]);
            }
            $this->v('data',$data);
            return $this->display('index');
        }
    }
    // 菜单管理
    public function menu()
    {
        $type   = X('type');
        $ation  = X('ation');
        $id     = intval(X('id'));
        $Menu   = S('menu');
        $size   = 40;
        $pageid = intval(X('pageid') ? X('pageid') : 1) or $pageid = 1;
        $this->view = 'Admin/menu';
        if(IS_POST){
            if($type == 'del'){
                // 删除菜单 menu
                deldata('menu','id',$id,'fid');
                // 删除权限 auth
                deldata('auth','id',$id,'fid');
                return $this->msg('删除成功');
            }
        }
        if($type == 'add'){
            // +------------------------------------------------------
            // | 菜单管理
            // +------------------------------------------------------
            if (IS_POST && $ation == 'add') {
                // 新增
                $menutype           = X('menutype'); 
                $fid                = X('fid');
                $ismenu             = X('ismenu');
                $name               = X('name');
                $name2              = X('name2');
                $icon               = X('icon');
                $keywords           = X('keywords');
                $description        = X('description');
                $paixu              = X('paixu');
                $status             = X('status');
                // 字段验证
                $Validate = A('Validate');
                $Validate->inputMenu($_POST);

                $Menu = S('menu');
                $Auth = S('auth');
                if($Menu->count(['name2'=>$name2]) && $menutype != 2 && $menutype != 3 ){
                    return $this->msg('系统已存在相同链接地址,请换一个重试');
                }
                
    
                $arr = [
                    'menutype'      => $menutype,
                    'name'          => $name,
                    'fid'           => $fid,
                    'ismenu'        => $ismenu,
                    'name2'         => $name2,
                    'icon'          => $icon,
                    'keywords'      => $keywords,
                    'description'   => $description,
                    'paixu'         => $paixu,
                    'status'        => $status,
                ];
                // 删除带处理权限的节点
                // 因为只是做为分类的用处所以不需要操作个功能
                $Menu->delete([
                    'AND'           => [
                        'ation'     => 1,
                        'fid'       => $fid
                    ]
                ]);
                // 新建节点
                $Menu->insert($arr); // 写入菜单数据
                $fid = $Menu->id();
                if (!$fid) {
                    return $this->msg('内部错误');
                }
                
                if($menutype == 1){
                    $ation = [['查看','view'],['增加','add'],['编辑','edit'],['删除','del']];
                    foreach($ation as $k => $v){
                        $Menu->insert([
                            'menutype'  => 1,
                            'name'      => $v[0],
                            'name2'     => $v[1],
                            'fid'       => $fid,
                            'ismenu'    => 0,
                            'paixu'     => $k,
                            'status'    => 1,
                            'ation'     => 1
                        ]);
                    }
                }

                return $this->msg('增加成功', true);
            }
            $result = S('menu')->select('*',['ation[!]'=>1]);
            $tree = L('Tree')->getTree($result,'id','fid','paixu');
            $this->v('fuji',  $tree);
            return $this->display('add');
        }elseif($type == 'edit'){
            if(!$id){
                return $this->msg('页面不存在');
            }
            $Menu = S('menu');
            if(IS_POST && $ation == 'edit'){
                // post编辑
                $menutype           = X('menutype'); 
                $fid                = X('fid');
                $ismenu             = X('ismenu');
                $name               = X('name');
                $name2              = X('name2');
                $icon               = X('icon');
                $keywords           = X('keywords');
                $description        = X('description');
                $paixu              = X('paixu');
                $status             = X('status');
                // 字段验证
                $Validate = A('Validate');
                $Validate->inputMenu($_POST);
                if($Menu->count(['name2'=>$name2,'id[!]'=>$id]) && $menutype != 2 && $menutype != 3 ){
                    return $this->msg('系统已存在相同链接地址,请换一个重试');
                }

                $Menu->update([
                    'menutype'      => $menutype,
                    'name'          => $name,
                    'fid'           => $fid,
                    'ismenu'        => $ismenu,
                    'name2'         => $name2,
                    'icon'          => $icon,
                    'keywords'      => $keywords,
                    'description'   => $description,
                    'paixu'         => $paixu,
                    'status'        => $status,
                ],['id'=>$id]);

                return $this->msg('修改成功',true);
                
            }
            $data = $Menu->find('*',['id'=>$id]);
            $result = S('menu')->select('*',['ation[!]'=>1]);
            $Tree = L('Tree');
            $fudata = $Tree->getTree($result,'id','fid','paixu');
            // 遍历选中当前主键ID的父级
            foreach($fudata as &$v){
                if($id == $v['id']){
                    foreach($fudata as &$vv){
                        $vv['_selected'] = ($vv['id'] == $v['fid'])? true : false;
                    }
                }
            }
            $this->v('data',$data);
            $this->v('fuji',$fudata);
            return $this->display('edit');
        }else{
            $this->v('title', '菜单管理');
            $data = $Menu->select('*', [
                'ation[!]'  => 1,
                'ORDER'     => ['id','paixu'],
                'LIMIT'     => [($pageid - 1) * $size, $size],
            ]);
            $Tree = L('Tree');
            $data = $Tree->getTree($data,'id','fid','paixu');
            $this->v('data', $data);
            return $this->display('index');
        }
    }
    // 管理组
    public function admin_group(){
        $type   = X('type');
        $ation  = X('ation');
        $this->view = 'Admin/admingroup';
        if($type == 'add'){
            // +------------------------------------------------------
            // | 管理组
            // +------------------------------------------------------
            if (IS_POST && $ation == 'add') {
                // 新增
                $row = X('row');
                $Role = S('role');
                $Validate = A('Validate');
                $Validate->inputgroup($row);
                if($Role->count(['name'=>$row['name']])){
                    return $this->msg('街头已存在请重新输入');
                }
                $Role->insert([
                    'name'      => $row['name'],
                    'status'    => $row['status'],
                    'color'     => $row['color'],
                    'atime'     => NOW_TIME,
         
                ]);
                $role_id = $Role->id();
                if(!$role_id){
                    return $this->msg('角色增加失败,原因内部错误');
                }
                $role_node = S('role_node');
                foreach(explode(",",$row['rules']) as $v){
                    $role_node->insert([
                        'role_id'   => $role_id,
                        'node_id'   => $v
                    ]);
                }
                return $this->msg('增加成功',true);
            }
            $menu = S('menu')->select('*',['menutype[!]'=>[2,3]]);
            $Tree = L('Tree');
            $data = $Tree->getTree($menu,'id','fid','paixu');
            $arrs = [];
            foreach($data as $v){
                $arrs[] = [
                    'id'    => $v['id'],
                    'parent'=> ($v['fid'] == 0) ?'#':$v['fid'],
                    'text'  => $v['name'],
                    'type'  => 'menu',
                    'state' => [
                        'selected'  => false,
                    ]
                ];
            }
            $this->v('json',json_encode($arrs));
            return $this->display('add');
        }elseif($type == 'edit'){
            if(IS_POST && $ation == 'edit'){
                // 新增
                $row = X('row');
                $role_id = $row['role_id'];
                $Role = S('role');
                $Validate = A('Validate');
                $Validate->inputgroup($row);
                if(!$Role->count(['name'=>$row['name']])){
                    return $this->msg('修改的内容不存在,可能已被其他管理员删除');
                }
                $Role->update([
                    'name'      => $row['name'],
                    'status'    => $row['status'],
                    'color'     => $row['color'],
                    'ud'        => $row['ud']
                ],['role_id'=>$role_id]);
                $role_node = S('role_node');
                // 删除原先的节点
                $role_node->delete([
                    'AND'   => [
                        'role_id' => $role_id,
                    ]
                ]);
                // dump(explode(",",$row['rules']) ,1);
                foreach(explode(",",$row['rules']) as $v){
                    $role_node->insert([
                        'role_id'   => $role_id,
                        'node_id'   => $v
                    ]);
                }
                return $this->msg('修改成功',true);
            }
            $role_id = intval(X('role_id'));
            $node_id = S('role_node')->select('node_id',['role_id'=>$role_id]);
            $Role = S('role');
            $Tree = L('Tree');
            $role = $Role->find('ud',['role_id'=> $role_id]);
            $menu = S('menu')->select('*',['menutype[!]'=>[2,3]]);
            $data = $Tree->getTree($menu,'id','fid','paixu');
            $arrs = [];
            $ids  = [];
            $roles= [];
            if($role){
                $roles = explode(",",$role);
            }
            foreach($data as $v){
                $ids[]  = $v['id'];
                $arrs[] = [
                    'id'    => $v['id'],
                    'parent'=> ($v['fid'] == 0) ?'#':$v['fid'],
                    'text'  => $v['name'],
                    'type'  => 'menu',
                    'state' => [
                        'selected'  => in_array($v['id'],$node_id) && !in_array($v['id'],$roles)?true:false,
                    ]
                ];
            }
            $role = S('role')->find('*',['role_id'=>$role_id]);
            $this->v('ids',implode(',',$ids));
            $this->v('data',$role);
            $this->v('json',json_encode($arrs));
            return $this->display('edit');
        }elseif($type == 'del'){
            
        }else{
            $ac = S('role')->select('*');
            $this->v('data',$ac);
            $this->v('title','管理组');
            return $this->display('index');
        }
    }
    // 用户组
    public function group(){
        $type   = X('type');
        $ation  = X('ation');
        $this->view = 'Admin/group';
        if($type == 'add'){
            $menu = S('menu')->select('*',['menutype[!]'=>[2,3],'type'=>1]);
            $Tree = L('Tree');
            $data = $Tree->getTree($menu,'id','fid','paixu');
            $arrs = [];
            foreach($data as $v){
                $arrs[] = [
                    'id'    => $v['id'],
                    'parent'=> ($v['fid'] == 0) ?'#':$v['fid'],
                    'text'  => $v['name'],
                    'type'  => 'menu',
                    'state' => [
                        'selected'  => false,
                    ]
                ];
            }
            $this->v('json',json_encode($arrs));
            return $this->display('add');
        }elseif($type == 'edit'){
            return $this->display('edit');
        }elseif($type == 'exit'){

        }else{
            $role = S('role');
            $data = $role->select('*',['type'=>1]); //tyoe == 1 前台用户组
            $this->v('data',$data);
            // 增加用户组
            $this->v('title','增加用户组');
            return $this->display('index');
        }
    }
    // 权限
    public function auth(){
        $type   = X('type');
        $ation  = X('ation');
        $id     = intval(X('id'));
        $Menu   = S('menu');
        $size   = 40;
        $pageid = intval(X('pageid') ? X('pageid') : 1) or $pageid = 1;
        $Menu   = S('menu');
        if($type == 'admin_group'){
            //管理组
            if($ation == 'add'){
                
            }elseif($ation ='edit'){

            }
            $ac = S('role')->select('*');
            $this->v('data',$ac);
            $this->v('title','管理组');
            return $this->display('group_admin');
        }elseif($type == 'group'){
            //用户组
            $this->v('title','用户组');
            return $this->display('group_user');
        }elseif($type == 'users'){
            //用户规则
            return $this->display('rule_user');
        }
    }
    // 测试邮件发送
    public function Testemail()
    {
        if (IS_POST) {
            $smtp = X('smtp');
            $port = X('port');
            $secure = X('secure');
            $user = X('user');
            $pass = X('pass');
            $sendemail = X('sendemail');
            $testemail = X('testemail');
            if (!$smtp) {
                return $this->msg('请设置smtp地址');
            } elseif (!$port) {
                return $this->msg('请设置端口');
            } elseif (!$user) {
                return $this->msg('请设帐号');
            } elseif (!$pass) {
                return $this->msg('请设密码');
            } elseif (!$sendemail) {
                return $this->msg('请设置发件邮箱');
            } elseif (!$testemail) {
                return $this->msg('请设测试邮件接收邮箱');
            }
            // 导入
            $Email = L('Email');
            // var_dump($this->_conf);exit;
            $res = $Email->send("测试邮件发送", "发送时间:" . date('Y-m-d H:i:s'), $testemail, $this->_conf);
            if ($res['error']) {
                return $this->msg($res['msg'], true);
            } else {
                return $this->msg($res['msg']);
            }
        }
    }
    public function login()
    {
        //{hook a_admin_index_1}
        if (NOW_AGID==0)
            exit('你的账号不属于管理员!');
        if (IS_GET) {
            //{hook a_admin_login_2}
            $this->v('title', '管理员登录');
            return $this->display("login");
            exit();
        } elseif (IS_POST) {
            //{hook a_admin_login_3}
            $pass = X("post.pass");
            if (L("User")->md5_md5($pass, $this->_user['salt']) == $this->_user['pass']) {


                session('admin', 'admin');

                header('Location: ' . URL('/admin'));
                exit;
            }
            if (IS_AJAX)
                $this->json(['error' => false, 'info' => '请重新登陆后台', 'data' => '请重新登陆后台']);
            else
                echo '密码错误';
        }
    }

}
