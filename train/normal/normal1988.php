<?php
function save() {
	$setting = array();
	$setting['admin_email'] = trim($_POST['setting']['admin_email']);
	$setting['maxloginfailedtimes'] = intval($_POST['setting']['maxloginfailedtimes']);
	$setting['minrefreshtime'] = intval($_POST['setting']['minrefreshtime']);
	$setting['mail_type'] = intval($_POST['setting']['mail_type']);		
	$setting['mail_server'] = trim($_POST['setting']['mail_server']);	
	$setting['mail_port'] = intval($_POST['setting']['mail_port']);	
	$setting['category_ajax'] = intval(abs($_POST['setting']['category_ajax']));	
	$setting['mail_user'] = trim($_POST['setting']['mail_user']);
	$setting['mail_auth'] = intval($_POST['setting']['mail_auth']);		
	$setting['mail_from'] = trim($_POST['setting']['mail_from']);		
	$setting['mail_password'] = trim($_POST['setting']['mail_password']);
	$setting['errorlog_size'] = trim($_POST['setting']['errorlog_size']);
	$setting = implode(" ",$setting);
	
	return $setting;
}

save();
?>