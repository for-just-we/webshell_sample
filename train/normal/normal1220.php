<?php
defined('IN_ADMIN');
$pc_hash = $_SESSION['pc_hash'];
foreach($datas as $_value) {
	echo '<h3 class="f14"><span class="switchs cu on" title="'.L('expand_or_contract').'"></span>'.L($_value['name']).'</h3>';
	echo '<ul>';
	$sub_array = admin::admin_menu($_value['id']);
}
?>
