<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$self=$HTTP_SERVER_VARS['PHP_SELF'];
set_magic_quotes_runtime(0);
@set_time_limit(0);
@ini_set('max_execution_time',0);
(@ini_get('safe_mode')=="1" ? $safe_mode="ON" : $safe_mode="OFF");
(@ini_get('disable_functions')!="" ? $disfunc=ini_get('disable_functions') : $disfunc=0);
(strtoupper(substr(PHP_OS, 0, 3))==='WIN' ? $os=1 : $os=0);
exit;
?>