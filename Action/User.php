<?php
// +------------------------------------------------------
// | Description: 
// | Author: 红着自己玩 <956716282@qq.com>
// | Date: 2019-08-27 13:33:38 
// | LastEditors: 红着自己玩 <956716282@qq.com>
// | LastEditTime: 2019-09-05 07:26:56 
// | Github: https://github.com/daniuwo/won.git
// | Copyright (c) 2019 http://won.cm All rights reserved.
// +------------------------------------------------------
namespace Action;
class User extends Common
{
    public function Login(){
        if(IS_LOGIN){
            return $this->msg('您已登录');
        }
        $re_url = X("server.HTTP_REFERER");
        if($re_url==''){
            $re_url=WWW;
        }
        if(strpos($re_url,WWW)!= -1 && strpos($re_url,'user')===false){
            cookie('re_url',$re_url);
        }
        if(IS_POST){
            $user = trim(X('user'));
            $pass = X('pass');
            $User = M("User");
            $rtype= X('rtype');
            $userData = $User->getUser($user);
            // 用户名检查
            if(!$userData){
                return $this->msg('用户名不存在',false,['type'=>'user']);
            }
            // 密码验证
            $UserLib = L("User");
            if($userData['pass'] != $UserLib->md5_md5($pass, $userData['salt'])){
                return $this->msg('密码错误,请换一个密码重试',false,['type'=>'pass']);
            }
            // cookie生成
            $cookie = $UserLib->set_cookie([
                'uid'   => $userData['uid'],
                'user'  => $userData['user'],
                'pass'  => $userData['pass'],
                'gid'   => $userData['gid'],
                'ip'    => CLIENT_IP
            ]);
            $userData['cookie'] = "WN_HEX=".$cookie;
            cookie('WN_HEX',$cookie,604800);
            // 返回api
            if($rtype == 'json'){
                return $this->Api('success',1,$userData);
            }
            $re_url =  cookie('re_yrl');
            if($re_url==''){
                $re_url='';
            }
            cookie('re_url',null);
            $this->init_user();
            return $this->msg('登录成功',true,[
                'url'   => $re_url
            ]);
            
        }
        $this->v('title','用户登录');
        return $this->display('user_login');
    }
    public function add(){
        if(IS_LOGIN){
            return $this->msg('您已登录');
        }
        if(IS_POST){
            $user  = trim(X('user'));
            $email = X('email');
            $pass1 = X('pass1');
            $pass2 = X('pass2');
            $xieyi = X('xieyi');
            $Validata = L('Validate');
            
            if(!$Validata->userName($user,'ALL',5)){
                return $this->msg('用户名只能是英文数字组成');
            }
            if(!$Validata->isValidLen($user,5,20)){
                return $this->msg('用户名必须是6到16位英文或数字');
            }
            if(!$Validata->Email($email)){
                return $this->msg('邮箱格式错误');
            }
            if($pass1 != $pass2){
                return $this->msg('两次输入的密码不一致');
            }
            if($xieyi != 'on'){
                return $this->msg('请勾选用户注册协议');
            }
            $User = M('User');
            $salt = substr(md5(mt_rand(10000000, 99999999) . NOW_TIME), 0, 8);
            $data = [
                'user'  => $user,
                'pass'  => L("User")->md5_md5($pass1, $salt),
                'email' => $email,
                'salt'  => $salt,
                'atime' => NOW_TIME,
                'gid'   => 2,
                'dtime' => NOW_TIME
            ];
            $uid = $User->add_user($data);
            if(empty($uid)){
                return $this->msg('注册失败,系统内部错误,请联系QQ');
            }
            $url = '';
            // 注册成功
            return $this->msg('注册成功',true,[
                'url' => $url
            ]);
        }
        $this->v('title','用户注册');
        return $this->display('user_add');
    }
}