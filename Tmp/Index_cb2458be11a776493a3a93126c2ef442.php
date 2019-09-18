<?php
// +------------------------------------------------------
// | Description: Index
// | Author: 红着自己玩 <956716282@qq.com>
// | Date: 2019-08-29 22:16:37 
// | LastEditors: 红着自己玩 <956716282@qq.com>
// | LastEditTime: 2019-08-30 08:37:26 
// | Github: https://github.com/daniuwo/won.git
// | Copyright (c) 2019 http://won.cm All rights reserved.
// +------------------------------------------------------
namespace Action;
class Index extends Common {
	public function Index(){
		if($this->_conf['weihu']){
			return $this->maintenance();
		}
		return $this->display('index');
	}
	public function edit(){
		$this->v('title',"页面排版");
		return $this->display('index_edit');
	}
	public function module(){
		$this->v('title','模块');
		return $this->display('module');
	}
	// 网站维护
	public function maintenance(){
		$this->v('title','网站维护');
		$this->v('msg',$this->_conf['weihu_msg']);
		return $this->display("maintenance");

	}
}