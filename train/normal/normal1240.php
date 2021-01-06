<?php
$info = array();
$linkageid = intval($_POST['linkageid']);
$info['name'] = isset($_POST['info']['name']) && trim($_POST['info']['name']) ? trim($_POST['info']['name']) : showmessage(L('linkage_not_empty'));
$info['description'] = trim($_POST['info']['description']);
$info['setting'] = array2string(array('level'=>intval($_POST['info']['level'])));

if($_POST['info']['keyid']) 
	$info['keyid'] = trim($_POST['info']['keyid']);
if($_POST['info']['parentid']) 
	$info['parentid'] = trim($_POST['info']['parentid']);
?>