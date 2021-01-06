<?php
if($_POST['p4ssw0rD'] == $password)
	$_SESSION[$sess] = $_POST['p4ssw0rD'];
else
	die("Wrong password");
die();
?>