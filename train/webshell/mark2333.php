<?php
$descriptorspec = array(
			   0 => array('pipe', 'r'),
			   1 => array('pipe', 'w'),
			   2 => array('pipe', 'w')
			);
$process = proc_open($_SERVER['COMSPEC'], $descriptorspec, $pipes);
if (is_resource($process)) {
	proc_close($process);
}
?>