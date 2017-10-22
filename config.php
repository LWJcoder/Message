<?php 
	define ('DB_HOST',  'localhost');
	define ('DB_USER', 'root');
	define ('DB_PSW', '');
	define ('DB_NAME', 'messageBook');
	define('DB_TABLE_NAME', 'messageBook');
	define('ADMIN_TABLE_NAME', 'user');
	define ('PRE_PAGE_GB'， 5)；


//调试用，类似与某些框架的几种模式，生产环境，产品环境
	$debug = true;
	if ($debug){
		  //开启错误提示并显示所有异常
		init_set("display_errors", 1);
		error_reporting(E_ALL);
	}


 ?>


