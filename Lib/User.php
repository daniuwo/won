<?php
// +------------------------------------------------------
// | Description: User 扩展类
// | Author: 红着自己玩 <956716282@qq.com>
// | Date: 2019-08-28 20:51:20 
// | LastEditors: 红着自己玩 <956716282@qq.com>
// | LastEditTime: 2019-08-29 09:04:01 
// | Github: https://github.com/daniuwo/won.git
// | Copyright (c) 2019 http://won.cm All rights reserved.
// +------------------------------------------------------
namespace Lib;
class User{
    public function md5_md5($s, $salt = '') {
		return md5(md5($s).$salt);
	}

	// 设置登录cookie
	public function set_cookie($data){
		return L("Encrypt")->encrypt(json_encode($data),C("MD5_KEY"));
	}
	// 获取登录cookie
	public function get_cookie($cookie){
		$json = L("Encrypt")->decrypt($cookie,C("MD5_KEY"));
		return json_decode($json,true);
	}
}