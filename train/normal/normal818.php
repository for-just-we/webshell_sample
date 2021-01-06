<?php
	$_POST['info']['type'] = intval($_POST['type']);
			
	if(isset($_POST['batch_add']) && empty($_POST['batch_add'])) {
		if($_POST['info']['catname']=='') 
			showmessage(L('input_catname'));
		$_POST['info']['catname'] = safe_replace($_POST['info']['catname']);
		$_POST['info']['catname'] = str_replace(array('%'),'',$_POST['info']['catname']);
		if($_POST['info']['type']!=2) {
			if($_POST['info']['catdir']=='') 
				showmessage(L('input_dirname'));
			if(!$this->public_check_catdir(0,$_POST['info']['catdir'])) 
				showmessage(L('catname_have_exists'));
		}
	}
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
?>