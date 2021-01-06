<?php
$pc_hash = $_SESSION['pc_hash'];
foreach($datas as $_value) {
	echo '<h3 class="f14"><span class="switchs cu on" title="'.L('expand_or_contract').'"></span>'.L($_value['name']).'</h3>';
	echo '<ul>';
	$sub_array = admin::admin_menu($_value['id']);
	foreach($sub_array as $_key=>$_m) {
		//附加参数
		$data = $_m['data'] ? '&'.$_m['data'] : '';
		$classname = 'class="sub_menu"';
		echo '<li id="_MP'.$_m['id'].'" '.$classname.'><a href="javascript:_MP('.$_m['id'].',\'?m='.$_m['m'].'&c='.$_m['c'].'&a='.$_m['a'].$data.'\');" hidefocus="true" style="outline:none;">'.L($_m['name']).'</a></li>';
	}
	echo '</ul>';
}
?>
