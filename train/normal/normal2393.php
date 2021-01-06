<?php
session_start();
define("start",atime());

ini_set('max_execution_time',0);
set_magic_quotes_runtime(0);
set_time_limit(0);
if(version_compare(phpversion(), '4.1.0') == -1){
	$_POST   = &$HTTP_POST_VARS; 
	$_GET= &$HTTP_GET_VARS; 
	$_SERVER = &$HTTP_SERVER_VARS; 
}

if (get_magic_quotes_gpc()){
	foreach ($_POST as $key=>$value){
		$_POST[$key] = stripslashes($value);
	}foreach ($_SERVER as $key=>$value){
		$_SERVER[$key] = stripslashes($value);
	}foreach ($_ENV as $key=>$value){
		$_SERVER[$key] = stripslashes($value);
	}foreach ($_FILES as $key=>$value){
		$_SERVER[$key] = stripslashes($value);
	}
}
if ($auth == 0) {
	$_SESSION['logged'] = true;
}

$safe_mode = ini_get("safe_mode"); 
if (!$safe_mode) {
	$safe_mode = 'off';
} else {
	$safe_mode = 'On';
}
$os = null; 
$dir = getcwd(); 

if(strlen($dir)>1 && $dir[1]==":") 
	$os = "win"; 
else $os = "nix";


?>



