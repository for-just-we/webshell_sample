<?php
$op = trim($_GET['op']);

if (isset($_GET['callback']) && !preg_match('/^[a-zA-Z_][a-zA-Z0-9_]+$/', $_GET['callback']))  
	unset($_GET['callback']);

include PHPCMS_PATH.'api/'.$op.'.php';
?>