<?php
$op = trim($_GET['op']);

if (isset($_GET['callback']) && !preg_match('/^[a-zA-Z_][a-zA-Z0-9_]+$/', $_GET['callback']))  
	unset($_GET['callback']);

if (!preg_match('/([^a-z_]+)/i',$op) && file_exists(PHPCMS_PATH.'api/'.$op.'.php')) {
	include PHPCMS_PATH.'api/'.$op.'.php';
} 
else {
	exit('API handler does not exist');
}
?>