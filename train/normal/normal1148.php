<?php
defined('IN_PHPCMS'); 

function ajax_gettopparent($id,$keyid,$callback,$path,$infos = array()) {
	$path = str_replace(array('/', '//'), '', $path);
	$keyid = str_replace(array('/', '//'), '', $keyid);
	$id = intval($id);
	if(!$infos) {
		$infos = getcache($keyid,$path);
	}
	if($infos[$id]['parentid']!=0) {
		return ajax_gettopparent($infos[$id]['parentid'],$keyid,$callback,$path,$infos);
	} else {
		echo trim_script($callback).'(',$id,')';
		exit;		
	}
}

ajax_gettopparent($_GET['id'],$_GET['keyid'],$_GET['callback'],$_GET['path']);
?>