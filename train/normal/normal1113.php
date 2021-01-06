<?php
function ajax_getlist() {
	$keyid = intval($_GET['keyid']);
	$datas = getcache($keyid,'linkage');
	$infos = $datas['data'];
	$where_id = isset($_GET['parentid']) ? $_GET['parentid'] : intval($infos[$_GET['linkageid']]['parentid']);
	$parent_menu_name = ($where_id==0) ? $datas['title'] :$infos[$where_id]['name'];
	if(is_array($infos)){
		foreach($infos AS $k=>$v) {
			if($v['parentid'] == $where_id) {
				$s[]=iconv(CHARSET,'utf-8',$v['linkageid'].','.$v['name'].','.$v['parentid'].','.$parent_menu_name);
			}
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