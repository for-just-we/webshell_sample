<?php
$command="id\npwd\n";
$descriptorspec = array(
	0 => array('pipe', 'r'),
	1 => array('pipe', 'w'),
	2 => array('pipe', 'w')
);
 
$resource = proc_open($command, $descriptorspec, $pipes, null, $_ENV);
$exit_code = proc_close($resource);
if (! empty($error))
	throw new Exception($error);
else
	echo $retval;
 
?>