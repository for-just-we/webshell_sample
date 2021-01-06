<?php
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('form', '', 0);

class login extends admin {
	
	/**
	 * 初始化页面
	 */
	public function init() {
		include $this->admin_tpl('login');
	}
	
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
		$this->log_out();
		$forward = urlencode($_GET['forward']);
	}
}