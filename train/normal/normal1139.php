<?php
defined('IN_PHPCMS'); 

function safe_getcache($str) {
	$str = str_replace(array("'",'#','=','`','$','%','&',';','..'), '', $str);
	$str = preg_replace('/(\/){1,}|(\\\){1,}/', '', $str);
	return $str;
}

echo $_GET['s'];
?>