<?php
// +------------------------------------------------------
// | Description: 树状结构生成
// | Author: 红着自己玩 <956716282@qq.com>
// | Date: 2019-09-03 14:27:21 
// | LastEditors: 红着自己玩 <956716282@qq.com>
// | LastEditTime: 2019-09-05 10:06:13 
// | Github: https://github.com/daniuwo/won.git
// | Copyright (c) 2019 http://won.cm All rights reserved.
// +------------------------------------------------------
namespace Lib;
class Tree{
    protected $paixu = ''; // 排序的字段
    protected $pname = ''; // 父名称
    protected $cname = ''; // 子名称
    protected $chile = []; // 子级临时存放
    /**
     * 原始数组转树状数组
     * @param $data;    数据
     * @param $pname;   父名称
     * @param $cname;   子名称
     * @param $paixu;   排序字段名称 (通过字段名称进行升序排序)
     * @return array
     */
    public function getTree($data,$pname,$cname,$paixu=''){
        $this->pname = $pname;
        $this->cname = $cname;
        $this->paixu = $paixu;
        // 树状结构
        if(empty($data)){
            return [];
        }
        $Tree = $this->Tree($data);
        if($this->paixu){
            foreach($Tree as $v){
                $key_arr[] = $v[$paixu];
            }
            array_multisort($key_arr,SORT_ASC,SORT_NUMERIC,$Tree);
        }
        // 普通数组
        return $this->arrzhuanhuan($Tree);
    }
    // 转成树状结构
    protected function Tree($arr , $fid = 0, $level = 0)
    {
        $tree = array();
        foreach ($arr as $v) {
            if ($v[$this->cname] == $fid) {        //父亲找到儿子
                $v['level'] = $level;
                $v['_name'] = $v['name']; // 栏目名称
                $chile = $this->Tree($arr, $v[$this->pname],$level+1);
                if($chile){
                    $v['chile'] = $chile;
                }
                $tree[] = $v;
            }
        }
        return $tree;
    }
    // 把树状转成普通数组
    protected function arrzhuanhuan($arr){
        $data = [];
        foreach($arr as $v){
            $chile = '';
            if(isset($v['chile'])){
                $chile = $v['chile'];
                unset($v['chile']);
            }
            $data[] = $v;
            if($chile){
                foreach($this->xiaceng($chile) as $val){
                    $data[] = $val;
                    $this->chile = [];
                }
            }
        }
        return $data;
    }
    // 子层处理
    protected function xiaceng($arr){
        // dump($arr,1);
        // 对数组进行重新排序
        if($this->paixu){
            foreach($arr as $vvv){
                $key_arrays[]=$vvv[$this->paixu];
            }
            array_multisort($key_arrays,SORT_ASC,SORT_NUMERIC,$arr);
        }
        foreach($arr as $k => &$v){
            $count = count($arr);
            $qian = $v['level'] > 1?'│&nbsp;&nbsp;&nbsp;&nbsp;':'';
            if($k == $count-1){
                $v['_name'] = str_repeat($qian,$v['level']*1-1)."└─".$v['name'];
            }else{
                $v['_name'] = str_repeat($qian,$v['level']*1-1)."├─".$v['name'];
            }
            $this->chile[] = $v;
            if(isset($v['chile'])){
                $this->xiaceng($v['chile']);
            }
        }
        return $this->chile;
    }
}