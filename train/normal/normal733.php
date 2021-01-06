<?php
$op = trim($_GET['op']);
unset($_GET['callback']);
include PHPCMS_PATH.'api/'.$op.'.php';
?>