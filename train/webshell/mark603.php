<?php
$server_addr = isset($_SERVER['SERVER_ADDR'])? $_SERVER['SERVER_ADDR']:isset($_SERVER["HTTP_HOST"])?$_SERVER["HTTP_HOST"]:"";
$remote_addr = isset($_SERVER['REMOTE_ADDR'])? $_SERVER['REMOTE_ADDR']:"";
$default_port = 13123;
$winbinary = (strtolower(substr(php_uname(),0,3))=="win")? "<option>executable</option>":"";
?>