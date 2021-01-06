<?php
defined('IN_ADMIN');
$pc_hash = $_SESSION['pc_hash'];
foreach($datas as $_value) {
	$sub_array = admin::admin_menu($_value['id']);
	foreach($sub_array as $_key=>$_m) {
		$data = $_m['data'];
		if($menuid == 5) { //左侧菜单不显示选中状态
			$classname = 'class="sub_menu"';
		} else {
			$classname = 'class="sub_menu"';
		}
		echo '<li id="_MP'.$_m['id'].'" '.$classname.'><a href="javascript:_MP('.$_m['id'].',\'?m='.$_m['m'].'&c='.$_m['c'].'&a='.$_m['a'].$data.'\');" hidefocus="true" style="outline:none;">'.L($_m['name']).'</a></li>';
	}
}
?>
