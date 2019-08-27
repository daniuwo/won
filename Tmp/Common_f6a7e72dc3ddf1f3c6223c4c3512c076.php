<?php
namespace Action;
use HY\Action;
class Common extends Action{
    public $login = false; // 登录状态 false未登录
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
        define('THEME',$this->view);
        define('WWW',$server_request_scheme.$_SERVER['HTTP_HOST'].'/');
        define('WWW_STATIC',WWW.'Static/');
        define('IS_LOGIN',$this->login);
    }
}