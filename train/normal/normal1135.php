<?php
/**
 * 获取联动菜单接口
 */
defined('IN_PHPCMS') or exit('No permission resources.'); 

switch($_GET['act']) {
	case 'ajax_gettopparent':
		ajax_gettopparent($_GET['linkageid'],$_GET['keyid'],$_GET['callback']);
	break;
	case 'ajax_select':
		$parent_id = $_GET['parent_id'] ? intval($_GET['parent_id']) : 0;
		$keyid = $_GET['keyid'];
		ajax_select($parent_id,$keyid);
	break;
}



/**
 * 获取地区顶级ID
 * Enter description here ...
 * @param  $linkageid 菜单id
 * @param  $keyid 菜单keyid
 * @param  $callback json生成callback变量
 * @param  $infos 递归返回结果数组
 */
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

/**************************************************************
 *
 *	以下函数适用于select联动样式
 *
 *************************************************************/
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
?>