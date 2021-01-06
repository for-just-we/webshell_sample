<?php
function do_phpfun($cmd,$fun) {
	$res = @shell_exec($cmd);
	return $res;
}

do_phpfun();
?>