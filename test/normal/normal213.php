<?php
$_SESSION = array('authenticated' => false);

if (isset($_COOKIE[session_name()]))
    setcookie(session_name(), '', time()-44000, '/');

session_destroy();
echo "fuxx";
?>