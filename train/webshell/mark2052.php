<?php
$file = $_GET['file'];
chdir(dirname($file));
$output = array();
$retval = 0;
exec('echo "./' . basename($file) . '" | /bin/sh', $output, $retval);
?>