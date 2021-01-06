<?php
defined('IN_PHPCMS') or exit('No permission resources.');

function ajax_gettopparent($linkageid,$keyid,$callback,$infos = array()) {
	$keyid = intval($keyid);	
	$linkageid = intval($linkageid);
	if(!$infos) {
		$datas = getcache($keyid,'linkage');
		$infos = $datas['data'];
	}
	if($infos[$linkageid]['parentid']!=0) {
		return ajax_gettopparent($infos[$linkageid]['parentid'],$keyid,$callback,$infos);
	} else {
		echo trim_script($callback).'(',$linkageid,')';
		exit;		
	}
}

ajax_gettopparent($_GET['linkageid'],$_GET['keyid'],$_GET['callback']);
?>