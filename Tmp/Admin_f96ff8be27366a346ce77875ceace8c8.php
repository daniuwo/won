<?php
// +------------------------------------------------------
// | Description: Admin控制器
// | Author: 红着自己玩 <956716282@qq.com>
// | Date: 2019-08-29 10:21:18 
// | LastEditors: 红着自己玩 <956716282@qq.com>
// | LastEditTime: 2019-08-29 14:21:02 
// | Github: https://github.com/daniuwo/won.git
// | Copyright (c) 2019 http://won.cm All rights reserved.
// +------------------------------------------------------
namespace Action;
class Admin extends Common
{
    public function __construct()
    {
        parent::__construct();
        if(!IS_LOGIN){
            header('Location: '.URL('user','login'));
            //exit('请登录前台!');
            exit;
        }
        // 设置后台模板
        $this->view = 'Admin';
        session('[start]');
        $md5 = session('admin');

        //echo $md5.'|';
        if(empty($md5)){
            $this->login();
            exit();
        }

    }
    public function index(){
        $this->v('title','仪表盘');
        return $this->display('index');
    }
    public function login(){
        
        if(NOW_AGID)
            exit('你的账号不属于管理员!');
        if(IS_GET){
            
            $this->v('title','管理员登录');
            return $this->display("login");exit();
        }
        elseif(IS_POST){
            
            $pass = X("post.pass");

            if(L("User")->md5_md5($pass, $this->_user['salt']) == $this->_user['pass']){


                session('admin','admin');

                header('Location: '. URL('/admin'));
                exit;
            }
            if(IS_AJAX)
                $this->json(['error'=>false,'info'=>'请重新登陆后台','data'=>'请重新登陆后台']);
            else
                return $this->msg('密码错误');
        }
    }
}