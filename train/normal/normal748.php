<?php
define('IN_PHPCMS', true);

//PHPCMS框架路径
define('PC_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

if(!defined('PHPCMS_PATH')) define('PHPCMS_PATH', PC_PATH.'..'.DIRECTORY_SEPARATOR);

//缓存文件夹地址
define('CACHE_PATH', PC_PATH.'..'.DIRECTORY_SEPARATOR.'caches'.DIRECTORY_SEPARATOR);
//主机协议
define('SITE_PROTOCOL', isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://');
//当前访问的主机名
define('SITE_URL', (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ''));
//来源
define('HTTP_REFERER', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');

//系统开始时间
define('SYS_START_TIME', microtime());

?>