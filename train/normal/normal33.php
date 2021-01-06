<?php
function stripslashes_deep($value)    {
    $value = is_array($value) ?
    array_map('stripslashes_deep', $value) :
    stripslashes($value);

    return $value;
}
	
	
session_start();
set_time_limit(0);
error_reporting(0);
if (get_magic_quotes_gpc()) {
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
	$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
}
if($_GET['do']=="remove"){
	nlink(getcwd().$_SERVER["SCRIPT_NAME"]);
}
?>