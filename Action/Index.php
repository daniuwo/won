<?php
namespace Action;
class Index extends Common {
	public function Index(){
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
		
		return $this->display("maintenance");

	}
}