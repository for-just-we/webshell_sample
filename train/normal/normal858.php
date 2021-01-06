<?php
if(!defined('UC_API')) {
	exit('Access denied');
}

error_reporting(0);

define('IN_UC', TRUE);
define('UC_CLIENT_VERSION', '1.5.1');
define('UC_CLIENT_RELEASE', '20100501');
define('UC_ROOT', substr(__FILE__, 0, -10));
define('UC_DATADIR', UC_ROOT.'./data/');
define('UC_DATAURL', UC_API.'/data');
?>