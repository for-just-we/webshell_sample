<?php
defined('IN_PHPCMS');
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('form', '', 0);
$session_storage = 'session_'.pc_base::load_config('system','session_storage');
pc_base::load_sys_class($session_storage);
class login extends admin {
	
	
	/**
	 * 登陆
	 */
	public function logind() {
		header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');	
		$username = isset($_POST['username']) && trim($_POST['username']) ? trim($_POST['username']) : showmessage(L('nameerror'), '?m=admin&a=init&c=login');
		$password = isset($_POST['password']) && trim($_POST['password']) ? trim($_POST['password']) : showmessage(L('password_can_not_be_empty'), '?m=admin&a=init&c=login');
		$code = isset($_POST['code']) && trim($_POST['code']) ? trim($_POST['code']) : showmessage(L('input_code'), HTTP_REFERER);

		
		if ($this->login($username,$password)) {
			$forward = isset($_POST['forward']) ? urldecode($_POST['forward']) : '';
		} 
	}
	
	/**
	 * 退出登录
	 */
	public function logout() {
		$this->log_out();
		$forward = isset($_GET['forward']) ? urlencode($_GET['forward']) : '';
	}
}