<?php
function array_stripslashes(&$array) {
    while(list($key,$var) = each($array)) {
        if ((strtoupper($key) != $key || ''.intval($key) == "$key") && $key != 'argc' && $key != 'argv') {
            if (is_string($var)) 
				$array[$key] = stripslashes($var);
            if (is_array($var)) 
				$array[$key] = array_stripslashes($var);  
        }
    }
    return $array;
}

@set_time_limit(0);
@error_reporting(E_ERROR | E_WARNING | E_PARSE);
@ob_start();
$pagestarttime = microtime();

if (get_magic_quotes_gpc()) {
    $_GET = array_stripslashes($_GET);
    $_POST = array_stripslashes($_POST);
}
?>