<?php
function edit(){
	$info = array();
	$linkageid = intval($_POST['linkageid']);
	$info['name'] = trim($_POST['info']['name']);
	$info['description'] = trim($_POST['info']['description']);
	$info['style'] = trim(intval($_POST['info']['style']));


	$info['keyid'] = trim($_POST['info']['keyid']);
	$info['parentid'] = trim($_POST['info']['parentid']);
}
?>