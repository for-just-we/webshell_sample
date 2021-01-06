<?php

#----------#
error_reporting(0);
ignore_user_abort(true);
set_time_limit(0);
ini_set('max_execution_time','0');
ini_set('memory_limit','9999M');
ini_set('output_buffering',0);
set_magic_quotes_runtime(0);
if(!isset($_SERVER))$_SERVER=&$HTTP_SERVER_VARS;
if(!isset($_POST))$_POST=&$HTTP_POST_VARS;
if(!isset($_GET))$_GET=&$HTTP_GET_VARS;
if(!isset($_COOKIE))$_COOKIE=&$HTTP_COOKIE_VARS;

?>