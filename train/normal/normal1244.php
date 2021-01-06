<?php
$info = array();
$linkageid = intval($_POST['linkageid']);
$info['name'] = trim($_POST['info']['name']);
$info['description'] = trim($_POST['info']['description']);
$info['style'] = trim(intval($_POST['info']['style']));

if($_POST['info']['keyid']) 
	$info['keyid'] = trim($_POST['info']['keyid']);
if($_POST['info']['parentid']) 
	$info['parentid'] = trim($_POST['info']['parentid']);
?>