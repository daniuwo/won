<?php
// +------------------------------------------------------
// | Description: 权限验证
// | Author: 红着自己玩 <956716282@qq.com>
// | Date: 2019-09-05 21:25:03 
// | LastEditors: 红着自己玩 <956716282@qq.com>
// | LastEditTime: 2019-09-07 10:40:05 
// | Github: https://github.com/daniuwo/won.git
// | Copyright (c) 2019 http://won.cm All rights reserved.
// +------------------------------------------------------

namespace Action;

class Rbac extends Common
{
    protected $url;
    protected function __construct()
    {
        parent::__construct();
        if (NOW_GID != 1) { // 系统管理员无需验证
        }
        // $this->auth();
    }
    private function auth()
    {
        $url = X('s');
        // 对url拼接处理
        if (!strpos($url, "/")) {
            $url = lcfirst(ACTION_NAME) . '/' . lcfirst(METHOD_NAME);
        }
        // 获取当前用户权限
        // 使用uid关联查询role_user>role>role_node
        // 最后返回该用户的所有节点

        $node_id = $this->getNodeId();
        // 节点空说明没有权限
        if (!$node_id) {
            exit("你没有权限访问");
        }
        // 返回有权限的菜单url
        $urls = $this->getMenuId($node_id);
        if (!$urls) {
            exit("你没有权限访问");
        }
        $type  = X('type');
        if($type == 'edit'){
            $url = lcfirst(ACTION_NAME) . '/' . lcfirst(METHOD_NAME)."/type/".$type;
        }
        $name2s = [];
        $ids    = [];
        $fid    = '';
        foreach ($urls as $v) {
            $name2s[] = $v['name2'];
            $ids[]    = $v['id'];
            if ($url == $v['name2']) {
                $fid = $v['id'];
            }
        }
        // 普通链接检测
        if (!in_array($url, $name2s)) {
            exit("你没有权限访问$url");
        }
        $ation = X('ation');
        // 如果有post提交 ation
        if($ation) {
            $ationId = $this->getAtion($fid);

            if (!in_array($ationId, $node_id)) {
                exit("你没有权限访问{$url}/ation/{$ation}");
            }
        }
    }
    /**
     * 使用当前在线uid查询菜单表(权限表)
     * @param array
     */
    protected function getMenuId($id)
    {
        return S('menu')->select(['name2', 'id'], ['id' => $id]);
    }
    /**
     * 使用当前在线uid来查询节点(规则表)
     * @param array
     */
    protected function getNodeId()
    {
        return S('role_user')->select(
            // 多表查询
            array(
                '[>]role'       =>  ['role_id' => 'role_id'],
                '[>]role_node'  =>  ['role_id' => 'role_id'],
            ),
            // 返回字段
            'role_node.node_id',
            // 查询条件
            // 使用当前用户uid来查询关联表
            array(
                'role_user.uid' =>  NOW_UID
            )
        );
    }
    /**
     * 使用父fid获取子的ation
     */
    protected function getAtion($fid)
    {
        $ation = X('ation');
        return S('menu')->find('id', ['fid' => $fid, 'name2' => $ation]);
    }
}
