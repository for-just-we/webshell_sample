<?php
	$_POST['info']['type'] = intval($_POST['type']);
			
	if(isset($_POST['batch_add']) && empty($_POST['batch_add'])) {
		if($_POST['info']['catname']=='') 
			showmessage(L('input_catname'));
		$_POST['info']['catname'] = str_replace(array('%'),'',$_POST['info']['catname']);
		
	}
			
	$_POST['info']['siteid'] = $this->siteid;
	$_POST['info']['module'] = 'content';
	$setting = $_POST['setting'];
	if($_POST['info']['type']!=2) {
		//栏目生成静态配置
		if($setting['ishtml']) {
			$setting['category_ruleid'] = $_POST['category_html_ruleid'];
		} 
		else {
			$setting['category_ruleid'] = $_POST['category_php_ruleid'];
			$_POST['info']['url'] = '';
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