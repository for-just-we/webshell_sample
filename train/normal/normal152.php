<?php
function getmicrotime()
{
   list($usec,$sec) = @explode(" ",@microtime());
   return ((float)$usec + (float)$sec);
}

define("starttime",@getmicrotime());
set_magic_quotes_runtime(0);
@set_time_limit(0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
$safe_mode = @ini_get('safe_mode');

?>