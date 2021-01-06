<?php
if(isset($_POST['dosubmit'])) {
	$_POST['info']['type'] = intval($_POST['type']);
			
	if(isset($_POST['batch_add']) && empty($_POST['batch_add'])) {
		$_POST['info']['catname'] = safe_replace($_POST['info']['catname']);
		$_POST['info']['catname'] = str_replace(array('%'),'',$_POST['info']['catname']);
	}
			
	$_POST['info']['siteid'] = $this->siteid;
	$_POST['info']['module'] = 'content';
	$setting = $_POST['setting'];
	if($_POST['info']['type']!=2) {
		//栏目生成静态配置
		$setting['category_ruleid'] = $_POST['category_php_ruleid'];
		$_POST['info']['url'] = '';
	}
			
	//内容生成静态配置
	$setting['show_ruleid'] = $_POST['show_html_ruleid'];

	if($setting['repeatchargedays']<1) 
		$setting['repeatchargedays'] = 1;
	$_POST['info']['sethtml'] = $setting['create_to_html_root'];
}
?>