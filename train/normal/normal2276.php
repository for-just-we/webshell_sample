<?php
$var = $_POST['val'];
$var = str_replace( "\\\"", "\"", preg_replace ( "/\[([a-zA-Z0-9_\-\.\x7f-\xff]+)\]/s", "['\\1']", $var ));
echo $var;
?>