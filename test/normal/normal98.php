<?php
session_start();
set_magic_quotes_runtime(0);
set_time_limit(0);
error_reporting(0);

$self = $HTTP_SERVER_VARS['PHP_SELF'];


@ini_set('max_execution_time',0);
if(@ini_get('safe_mode') == '1')
	$safe_mode="ON";
else 
	$safe_mode="OFF";

if(@ini_get('disable_functions') != "")
	$disfunc = ini_get('disable_functions');
else 
	$disfunc = 0;

if(strtoupper(substr(PHP_OS, 0, 3))==='WIN')
	$os = 1;
else 
	$os = 0;

exit;
?>