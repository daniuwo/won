<?php
// +------------------------------------------------------
// | Description: 用户模型
// | Author: 红着自己玩 <956716282@qq.com>
// | Date: 2019-08-28 20:54:58 
// | LastEditors: 红着自己玩 <956716282@qq.com>
// | LastEditTime: 2019-08-29 09:36:13 
// | Github: https://github.com/daniuwo/won.git
// | Copyright (c) 2019 http://won.cm All rights reserved.
// +------------------------------------------------------
namespace Model;
use HY\Model;
class User extends Model
{
    public function read($uid){
        return $this->find('*',['uid'=>$uid]);
    }
    // +------------------------------------------------------
    // | description: 用户名是否存在
    // | param {string} $user 用户名
    // | return: bool
    // +------------------------------------------------------
    public function isUser($user){
        $res = $this->count(['user'=>$user]);
        if($res){
            return true;
        }
        return false;
    }
    // +------------------------------------------------------
    // | description: 获取用户信息
    // | param {string} $user
    // | return: array
    // +------------------------------------------------------
    public function getUser($user){
        return $this->find('*',['user'=>$user]);
    }
    /**
     * 添加账号
     * @access public
     * @param array $data
     * @return int uid
     */
    public function add_user($data)
    {
        
        $this->insert($data);
        $uid = $this->id();
        
        return $uid;
    }
}
