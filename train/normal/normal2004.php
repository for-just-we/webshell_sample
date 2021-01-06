<?php
	$name = trim($_POST['name']);
	$dirname = strtolower(trim($_POST['dirname']));
	$domain = isset($_POST['domain'])) ? trim($_POST['domain']) : '';
	$site_title = isset($_POST['site_title']) ? trim($_POST['site_title']) : '';
	$keywords = isset($_POST['keywords']) ? trim($_POST['keywords']) : '';
	$description = isset($_POST['description']) ? trim($_POST['description']) : '';
	$release_point = isset($_POST['release_point']) ? $_POST['release_point'] : '';
	$template = $_POST['template'];
	$default_style = $_POST['default_style'];			   
	
?>