<?php

function getmicrotime() {
	list($usec, $sec) = explode(" ", microtime()); 
	return ((float)$usec + (float)$sec);
}

error_reporting(5);
@ignore_user_abort(TRUE);
@set_magic_quotes_runtime(0);
$win = strtolower(substr(PHP_OS,0,3)) == "win";
define("starttime",getmicrotime());

?>