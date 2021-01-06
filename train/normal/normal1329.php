<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('form', '', 0);

class login{
	/**
	 * 登陆
	 */
	public function logind() {
		header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');	
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$code = trim($_POST['code']);

		
		$forward = urldecode($_POST['forward']);
	}
	
	/**
	 * 退出登录
	 */
	public function logout() {
		$forward = urlencode($_GET['forward']);
	}
}