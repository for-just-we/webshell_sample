<?php
defined('IN_PHPCMS');

function ajax_getlist() {
	$cachefile = safe_getcache($_GET['cachefile']);
	$path = safe_getcache($_GET['path']);
	$title = $_GET['title'];
	$key = $_GET['key'];
	$infos = getcache($cachefile,$path);
	$where_id = intval($_GET['parentid']);
	$parent_menu_name = ($where_id==0) ? '' : trim($infos[$where_id][$key]);
	is_array($infos)?null:$infos = array();
	foreach($infos AS $k=>$v) {
		if($v['parentid'] == $where_id) {
			if ($v['parentid']) $parentid = $infos[$v['parentid']]['parentid'];
			$s[]=iconv(CHARSET,'utf-8',$v['catid'].','.trim($v[$key]).','.$v['parentid'].','.$parent_menu_name.','.$parentid);
		}
	}
	if(count($s)>0) {
		$jsonstr = json_encode($s);
		echo trim_script($_GET['callback']).'(',$jsonstr,')';
		exit;			
	} else {
		echo trim_script($_GET['callback']).'()';exit;			
	}
}

ajax_getlist();
?>