<?php
define('PHPSHELL_VERSION', '1.7'); 
if (ini_get('register_globals') != '1') { 
  /* We'll register the variables as globals: */ 
  if (!empty($HTTP_POST_VARS)) 
    extract($HTTP_POST_VARS); 
   
  if (!empty($HTTP_GET_VARS)) 
    extract($HTTP_GET_VARS); 
  if (!empty($HTTP_SERVER_VARS)) 
    extract($HTTP_SERVER_VARS); 
} 

?>