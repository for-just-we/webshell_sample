<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	@exec($cmd,$res); 
	$res = join("\n",$res); 
	return $res;
}

call_user_func('do_phpfun');
?>