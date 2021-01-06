<?php
$op = isset($_GET['op']) && trim($_GET['op']) ? trim($_GET['op']) : exit('Operation can not be empty');
 
unset($_GET['callback']);

if (!preg_match('/([^a-z_]+)/i',$op) && file_exists(PHPCMS_PATH.'api/'.$op.'.php')) {
	include PHPCMS_PATH.'api/'.$op.'.php';
} 
?>