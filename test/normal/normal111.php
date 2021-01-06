<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$self=$HTTP_SERVER_VARS['PHP_SELF'];
set_magic_quotes_runtime(0);
@set_time_limit(0);

die();
?>