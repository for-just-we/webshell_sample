<?php
function addquote($var){
	return str_replace( "\\\"", "\"", preg_replace ( "/\[([a-zA-Z0-9_\-\.\x7f-\xff]+)\]/s", "['\\1']", $var ));
}

$var = addquote($_POST['val']);
?>