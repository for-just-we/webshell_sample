<?php
define("starttime", @getmicrotime());
set_magic_quotes_runtime(0);
@set_time_limit(0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
$safe_mode = @ini_get('safe_mode');
$version = '1.43<br>&nbsp;&nbsp;&nbsp;edited by h4cker.tr';
?>