<?php
namespace Action;
class User extends Common
{
    public function login(){
        if(IS_LOGIN){
            return $this->msg('您已登录');
        }
    }
}