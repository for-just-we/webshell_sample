<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 

$username = trim($_GET['username']);
$password = trim($_GET['password']);
$url = trim(urldecode($_GET['url']));
$name = trim($_GET['name']);
$authkey = trim($_GET['authkey']);
$apifilename = trim($_GET['apifilename']);
$charset = trim($_GET['charset']);
$type = trim($_GET['type']);
$synlogin = trim($_GET['synlogin']);
if(file_exists(CACHE_PATH.'phpsso_install.lock')) {
	exit('-4');
} else {
	file_put_contents(CACHE_PATH.'phpsso_install.lock', '1');
}
?>