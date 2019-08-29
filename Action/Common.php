<?php
// +------------------------------------------------------
// | Description: 
// | Author: 红着自己玩 <956716282@qq.com>
// | Date: 2019-08-27 13:32:57 
// | LastEditors: 红着自己玩 <956716282@qq.com>
// | LastEditTime: 2019-08-29 11:29:07 
// | Github: https://github.com/daniuwo/won.git
// | Copyright (c) 2019 http://won.cm All rights reserved.
// +------------------------------------------------------

namespace Action;
use HY\Action;
class Common extends Action{
    public $_login  = false; // 登录状态 false未登录
    public $_user   = [];
    public $_uid    = 0;
    public $_group  = 0;
    public $_agroup = 0; // 管理员组 0 非管理员 1系统管理员 2超级管理员 
    public function __construct()
    {
        if(IS_MOBILE){
            $this->view = 'Mobile';
        }else{
            $this->view = 'Index';
        }
        
        if ( (! empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https') || (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (! empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') ) {
            $server_request_scheme = 'https://';
           } else {
            $server_request_scheme = 'http://';
        }
        // 实例化用户
        $this->init_user();
        define('THEME',$this->view);
        define('WWW',$server_request_scheme.$_SERVER['HTTP_HOST'].'/');
        define('WWW_STATIC',WWW.'Static/');
        define('NOW_UID',$this->_uid);
        define('NOW_GID',$this->_group);
        define('NOW_AGID',$this->_agroup);
        define('IS_LOGIN',$this->_login);
        $this->v('user',$this->_user);
        $this->v('title','未定义标题');
    }
    //初始化 用户
    protected function init_user(){
        //{hook a_common_init_user_1}
        $cookie = cookie("WN_HEX");
        if(!empty($cookie)){
            //{hook a_common_init_user_2}
            $UserLib = L("User");
            $user = $UserLib->get_cookie($cookie);
            if(!empty($user)){
                //{hook a_common_init_user_3}
                if(isset($user['uid']) 
                    && isset($user['user'])
                    && isset($user['pass'] )
                    ){
                    $user_data = M("User")->read($user['uid']);
                    //更改密码后 重新登录
                    //用户更改用户组后 重新登录
                    //{hook a_common_init_user_4}
                    if($user_data['pass'] == $user['pass'] && 
                        $user_data['user'] == $user['user'] 
                        ){
                        //{hook a_common_init_user_5}
                        // if($user_data['ban_login']){
                        //     $this->message("账号已经被管理员锁定，禁止登陆!");
                        //     cookie('HYBBS_HEX',null);
                        //     die;
                        // }
                        $this->_uid = $user_data['uid'];

                        $this->_group = $user_data['gid'];
                        $this->_agroup = $user_data['agid'];
                        $user = $user_data;
                        $user['avatar'] = $this->avatar($user['uid']);
                        // $user['mess'] = M("Chat_count")->get_c($user['uid']);
                        $this->_user = $user;

                        $this->_login=true;
                        $this->v('user',$this->_user);
                        //{hook a_common_init_user_6}
                    }
                }
            }
        }
        //{hook a_common_init_user_v}
    }
    public function msg($msg,$error=false,$data = [],$code=0){
        if(IS_POST){
            return $this->json([
                'msg'   => $msg,
                'error' => $error,
                'data'  => $data,
                'code'  => $code,
            ]);
        }
        $this->v('title',$msg.' - 提示');
        $this->v("msg",$msg);
        $this->v("bool",$error);
        return $this->display('message');
    }
    // +------------------------------------------------------
    // | description: 作为Api数据返回
    // | param {string} $msg 
    // | param {int} $code 
    // | param {array} $data 
    // | return: json
    // +------------------------------------------------------
    public function Api($msg,$error=false,$data = [],$code=0){
        return $this->json([
            'msg'   => $msg,
            'error' => $error,
            'data'  => $data,
            'code'  => $code,
        ]);
    }
    //获取用户头像
    //传入UID
    protected function avatar($uid){
        //{hook a_common_avatar}
        $path = INDEX_PATH . 'upload/avatar/' . md5($uid);
        $path1 = 'upload/avatar/' . md5($uid);
        if(!is_file($path.'-a.jpg'))
            return array(
                'a'=>'Static/images/user.jpg',
                'b'=>'Static/images/user.jpg',
                'c'=>'Static/images/user.jpg',
            );
        return array(
            "a"=>$path1."-a.jpg",
            "b"=>$path1."-b.jpg",
            "c"=>$path1."-c.jpg"
        );
    }
}