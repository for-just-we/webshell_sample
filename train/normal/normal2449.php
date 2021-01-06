<?php
error_reporting(0);

@session_start();
$username = "098f6bcd4621d373cade4e832627b4f6"; //test
$password = "098f6bcd4621d373cade4e832627b4f6"; //test
if (md5($_POST['user']) == $username && md5($_POST['pass']) == $password) {
    $_SESSION['loginh'] = "1";
}

?>