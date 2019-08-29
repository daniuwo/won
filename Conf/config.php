<?php
return array(
	/*配置项*/
	'DEBUG_PAGE' => false,
	//数据库类型
	"SQL_TYPE" => "mysql",
	//数据库名称
	"SQL_NAME" => "wn_cn",
	//数据库地址
	"SQL_IP" => "localhost",
	//数据库账号
	'SQL_USER' => 'wn_cn',
	//数据密码
	'SQL_PASS' => '123456',
	//数据库字符集
	'SQL_CHARSET' => 'utf8',
	//数据库端口
	'SQL_PORT' => 3306,
	//数据库前缀
	'SQL_PREFIX' => 'wn_',
	//PDO配置
	'SQL_OPTION' => array(
		PDO::ATTR_CASE => PDO::CASE_NATURAL,
		//PDO::ATTR_PERSISTENT => true //长连接
	),
	'MD5_KEY'=>'123456'
);
