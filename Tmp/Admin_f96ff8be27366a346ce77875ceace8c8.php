<?php
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
    }
}