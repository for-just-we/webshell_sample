<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 

function ajax_getpath($parentid,$keyid,$callback,$path = 'commons',$result = array(),$infos = array()) {
	$path = safe_getcache($path);
	$keyid = safe_getcache($keyid);
	$parentid = intval($parentid);
	if(!$infos) {
		$infos = getcache($keyid,$path);
	}
	if(array_key_exists($parentid,$infos)) {
		$result[]=iconv(CHARSET,'utf-8',trim($infos[$parentid]['catname']));
		return ajax_getpath($infos[$parentid]['parentid'],$keyid,$callback,$path,$result,$infos);
	} else {
		if(count($result)>0) {
			krsort($result);
			$jsonstr = json_encode($result);
			echo trim_script($callback).'(',$jsonstr,')';
			exit;
		} else {
			$result[]=iconv(CHARSET,'utf-8',$datas['title']);
			$jsonstr = json_encode($result);
			echo trim_script($callback).'(',$jsonstr,')';
			exit;
		}
	}
}

ajax_getpath($_GET['parentid'],$_GET['keyid'],$_GET['callback'],$_GET['path']);
?>