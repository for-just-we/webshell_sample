<?php
function usermicrotime() {
	list($usec, $sec) = explode(" ", microtime()); 
	return ((float)$usec + (float)$sec);
}

echo usermicrotime();
?>