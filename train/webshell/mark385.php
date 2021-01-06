<?php
$file = $_POST['file'];
chdir(dirname($file));

$output = array();
$retval = 0;
exec('echo "./' . basename($file) . '" | /bin/sh', $output, $retval);

$error = ($retval == 0) ? false : true;

if (sizeof($output) == 0) 
	$output = array('<' . $words['no_output'] . '>');

if ($error) {
	listing_page(error('not_executed', $file, implode("\n", $output)));
}else {
	listing_page(notice('executed', $file, implode("\n", $output)));
}

?>