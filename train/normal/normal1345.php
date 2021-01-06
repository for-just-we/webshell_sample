<?php 
$city = urldecode(trim($_GET['city']));
$city = str_replace(array('<','>','"',"'",'/','(',')','&',';'),'',$city);
echo $city;
?>