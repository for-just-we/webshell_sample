<?php
defined('IN_PHPCMS');

function ajax_select($parentid,$keyid) {
	$keyid = intval($keyid);
	$datas = getcache($keyid,'linkage');
	$infos = $datas['data'];
	$json_str = "[";
	$json = array();
	foreach($infos AS $k=>$v) {
		if($v['parentid'] == $parentid) {
			$r = array('region_id' => $v['linkageid'],
					   'region_name' => $v['name']);
			$json[] = JSON($r);		
		}
	}
	$json_str .= implode(',',$json);
	$json_str .= "]";
	echo $json_str;	
}

$parent_id = intval($_GET['parent_id']);
$keyid = $_GET['keyid'];
ajax_select($parent_id,$keyid);
?>