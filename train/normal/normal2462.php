<?php
@session_start();
@set_time_limit(0);

//PASSWORD CONFIGURATION
@$pass = $_POST['pass'];
$chk_login =  true;
$password = "dulgandul";

//END CONFIGURATION

if($pass == $password)
{
 $_SESSION['lum'] = "$pass";
}

if (!$chk_login == true)
	die("");
?>