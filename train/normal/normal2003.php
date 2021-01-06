<?php
if (isset($_POST['dosubmit'])) {
	$name = trim($_POST['name']);
	$dirname = strtolower(trim($_POST['dirname']));
	$domain = trim($_POST['domain']);
	$site_title = trim($_POST['site_title']);
	$keywords = trim($_POST['keywords']);
	$description = trim($_POST['description']);
	$release_point = $_POST['release_point'];
	$template = $_POST['template'];
	$default_style = $_POST['default_style'];			   
}		
?>