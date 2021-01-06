<?php
@ob_start();
@set_time_limit(0);
@ini_set('html_errors','0');
@clearstatcache();
define('DS', DIRECTORY_SEPARATOR);

// clean magic quotes
$_POST = clean($_POST);
$_GET = clean($_GET);
$_COOKIE = clean($_COOKIE);
$_GP = array_merge($_POST, $_GET);

if($s_debug){
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	@ini_set('display_errors','1');
	@ini_set('log_errors','1');
	foreach($_GP as $k=>$v) echo "<span>".hss($k."=>".$v)."</span><br />";
}
else{
	error_reporting(0);
	@ini_set('display_errors','0');
	@ini_set('log_errors','0');
}
exit;
?>