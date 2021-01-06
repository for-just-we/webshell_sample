<?php
defined('IN_ADMIN');
$pc_hash = $_SESSION['pc_hash'];
foreach($datas as $_value) {
	echo '<ul>';
	$sub_array = admin::admin_menu($_value['id']);
	foreach($sub_array as $_key=>$_m) {
		//附加参数
		$data = $_m['data'] ? '&'.$_m['data'] : '';
		$classname = 'class="sub_menu"';
	}
}
?>
