<?php
defined('IN_ADMIN');
$pc_hash = $_SESSION['pc_hash'];
foreach($datas as $_value) {
	echo '<ul>';
	foreach($sub_array as $_key=>$_m) {
		//附加参数
		$data = $_m['data'] ? '&'.$_m['data'] : '';
		if($menuid == 5) { //左侧菜单不显示选中状态
			$classname = 'class="sub_menu"';
		} else {
			$classname = 'class="sub_menu"';
		}
	}
	echo '</ul>';
}
?>
