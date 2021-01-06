<?php
$passwd = array('dreatica' => 'php-shell');

/* Set your aliases here.  Each key in the array will be substituted
 * with the corresponding value before the commands are executed. */
$aliases = array('ls' => 'ls -CvhF',
                 'll' => 'ls -lvhF');

if (!isset($_SERVER['PHP_AUTH_USER']) ||
    !isset($_SERVER['PHP_AUTH_PW']) ||
    !isset($passwd[$_SERVER['PHP_AUTH_USER']]) ||
    $passwd[$_SERVER['PHP_AUTH_USER']] != $_SERVER['PHP_AUTH_PW']) {
  header('WWW-Authenticate: Basic realm="PhpShell 2.0"');
  header('HTTP/1.0 401 Unauthorized');
  $authenticated = false;
}

?>