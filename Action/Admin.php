<?php
/*
 * @Description: In User Settings Edit
 * @Author: your name
 * @Date: 2019-08-27 09:39:50
 * @LastEditTime: 2019-08-27 09:53:28
 * @LastEditors: Please set LastEditors
 */

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