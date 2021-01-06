<?php
function getmicrotime() {
	list($usec, $sec) = explode(" ", microtime()); 
	return ((float)$usec + (float)$sec);
}

if (isset($_GET['showtime']))
	echo getmicrotime();

die();
?>