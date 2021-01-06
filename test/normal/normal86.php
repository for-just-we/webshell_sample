<?php
function hss($t){
	$n = array(">","<","\"");
	$y = array("&gt;", "&lt;", "&quot;");
	return str_replace($n,$y,$t);
}

hss("aaaaa");
exit;
?>