<?php
@session_start();
#if(empty($_POST['ajax']))
#	print_r($_POST);
error_reporting(E_ALL);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
@define('VERSION', '2');
@define('SELF_PATH', __FILE__);
?>