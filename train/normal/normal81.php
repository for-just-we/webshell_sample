<?php
$safe_mode = @ini_get('safe_mode'); 
if(!$safe_mode) 
    error_reporting(0); 
  
$disable_functions = @ini_get('disable_functions'); 
$home_cwd = @getcwd(); 

?>