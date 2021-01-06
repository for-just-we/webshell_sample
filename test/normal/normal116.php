<?php
@error_reporting(5);

/*------------------ Anti Crawler ------------*/
if(!empty($_SERVER['HTTP_USER_AGENT']))
{
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
    header('HTTP/1.0 404 Not Found');
    die();  
}
?>