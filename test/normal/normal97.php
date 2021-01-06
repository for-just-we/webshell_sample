<?php
error_reporting(5);
@ignore_user_abort(true);
@set_magic_quotes_runtime(0);
@set_time_limit(0);
$win = strtolower(substr(PHP_OS, 0, 3)) == "win";
if (!@ob_get_contents()) {
	@ob_start(); 
	@ob_implicit_flush(0);
}
define("starttime",getmicrotime());
exit;
?>