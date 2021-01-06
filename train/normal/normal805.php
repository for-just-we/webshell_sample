<?php
if(isset($_POST['dosubmit'])) {
	$_POST['info']['type'] = intval($_POST['type']);
			
	if(isset($_POST['batch_add']) && empty($_POST['batch_add'])) {
		if($_POST['info']['catname']=='') 
			showmessage(L('input_catname'));
		$_POST['info']['catname'] = safe_replace($_POST['info']['catname']);
		$_POST['info']['catname'] = str_replace(array('%'),'',$_POST['info']['catname']);	
		showmessage(L('catname_have_exists'));
	}
			
	$_POST['info']['siteid'] = $this->siteid;
	$_POST['info']['module'] = 'content';
	$setting = $_POST['setting'];
	
	//内容生成静态配置
	if($setting['content_ishtml']) {
		$setting['show_ruleid'] = $_POST['show_html_ruleid'];
	} 
	else {
		$setting['show_ruleid'] = $_POST['show_php_ruleid'];
	}
	if($setting['repeatchargedays']<1) 
		$setting['repeatchargedays'] = 1;
	$_POST['info']['sethtml'] = $setting['create_to_html_root'];
}
?>