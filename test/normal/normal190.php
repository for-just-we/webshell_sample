<?php     
    set_time_limit(0);
    error_reporting(0);
      
    $pageURL = 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    $u = explode("/",$pageURL );
    $pageURL =str_replace($u[count($u)-1],"",$pageURL );
     
    $pageFTP = 'ftp://'.$_SERVER["SERVER_NAME"].'/public_html/'.$_SERVER["REQUEST_URI"];
    $u = explode("/",$pageFTP );
    $pageFTP =str_replace($u[count($u)-1],"",$pageFTP );
     die();
?>