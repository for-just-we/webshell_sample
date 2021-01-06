<?php
define('CHARSET' ,pc_base::load_config('system','charset'));
//输出页面字符集
header('Content-type: text/html; charset='.CHARSET);

define('SYS_TIME', time());
//定义网站根路径
define('WEB_PATH',pc_base::load_config('system','web_path'));
//js 路径
define('JS_PATH',pc_base::load_config('system','js_path'));
//css 路径
define('CSS_PATH',pc_base::load_config('system','css_path'));
//img 路径
define('IMG_PATH',pc_base::load_config('system','img_path'));
//动态程序路径
define('APP_PATH',pc_base::load_config('system','app_path'));

if(pc_base::load_config('system','gzip') && function_exists('ob_gzhandler')) {
	ob_start('ob_gzhandler');
} else {
	ob_start();
}
?>