<?php
// +------------------------------------------------------
// | Description: 扩展函数
// | Author: 红着自己玩 <956716282@qq.com>
// | Date: 2019-08-29 19:15:25 
// | LastEditors: 红着自己玩 <956716282@qq.com>
// | LastEditTime: 2019-09-07 09:57:06 
// | Github: https://github.com/daniuwo/won.git
// | Copyright (c) 2019 http://won.cm All rights reserved.
// +------------------------------------------------------
function WN_URL($action, $method = '', $age = [], $ext = '')
{
	echo WWW . (C('REWRITE') ? '' : '?') . URL($action, $method, $age, $ext);
}
function WN_URLA($action, $method = '', $age = [], $ext = '')
{
	return WWW . (C('REWRITE') ? '' : '?') . URL($action, $method, $age, $ext);
}
function dump($data, $exit = false)
{
	if ($exit) {
		echo '<pre>' . print_r($data, 1) . '</prd>';
		exit;
	} else {
		echo '<pre>' . print_r($data, 1) . '</prd>';
	}
}
/**
 * 递归向下删除数据
 * @param string $table 	表名
 * @param string $name 		字段名称 fid
 * @param int $id 			主键id
 * @param string $fname 	父id名称
 */
function deldata($table, $name, $id, $fname = '')
{
	$Db = S($table);
	$data = $Db->find('*', [$name => $id]);
	$zdata = $Db->select('*', [$fname => $data[$name]]);
	// 删除当前数据
	$Db->delete([
		'AND' => [
			$name => $id,
		]
	]);
	if ($zdata) {
		// 继续向下查询遍历
		foreach ($zdata as $v) {
			deldata($table, $name, $v[$name], $fname);
		}
	}
}
function tree($arr, $fid = 0, $level = 0)
{
	$tree = array();
	foreach ($arr as $k => $v) {
		if ($v['fid'] == $fid) {        //父亲找到儿子
			$v['level'] = $level;
			$v['chile'] = tree($arr, $v['id'],$level+1);
			$tree[] = $v;
		}
	}
	return $tree;
}
function getTreeMenu($arr, $fid = 0, $level = 0)
{
	$tree = array();
	foreach ($arr as $k => $v) {
		if ($v['fid'] == $fid) {        //父亲找到儿子
			$v['level'] = $level;
			$v['_name'] = $v['name'];
			$chile = getTreeMenu($arr, $v['id'],$level+1);
			if($chile){
				$v['chile'] = $chile;
			}
			$tree[] = $v;
		}
	}

	return $tree;
}
function arrzhuanhuan($arr){
	$data = [];
	foreach($arr as $v){
		if(isset($v['chile'])){
			foreach(xiaceng($v['chile']) as $val){
				$data[] = $val;
			}
		}else{
			$data[] = $v;
		}
	}
	return $data;
}
function xiaceng($arr){
	static $data = [];
	sort($arr);
	foreach($arr as $k => &$v){
		$count = count($arr);
		$qian = $v['level'] > 1?'│&nbsp;&nbsp;&nbsp;&nbsp;':'';
		if($k == $count-1){
			$v['_name'] = str_repeat($qian,$v['level']*1-1)."└─".$v['name'].$v['level'];
		}else{
			$v['_name'] = str_repeat($qian,$v['level']*1-1)."├─".$v['name'].$v['level'];
		}
		$data[] = $v;
		if(isset($v['chile'])){
			xiaceng($v['chile']);
		}
		// $v['chile'][$count-1]['_name'] = "└".str_repeat('&nbsp;',$v['chile'][$count-1]['level']*2).$v['chile'][$count-1]['name'];
	}
	return $data;
}
function is_active($id){
	$url = X('s');
	$menu = S('menu')->find(['id','fid'],['name2'=>$url]);
	if($id == $menu['fid'] || $menu['id'] == $id){
		return true;
	}
	return false;
}