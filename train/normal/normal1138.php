<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 

function safe_getcache($str) {
	$str = str_replace(array("'",'#','=','`','$','%','&',';','..'), '', $str);
	$str = preg_replace('/(\/){1,}|(\\\){1,}/', '', $str);
	return $str;
}

echo $_GET['s'];
?>