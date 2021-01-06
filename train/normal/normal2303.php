<?php
error_reporting(0);
define('PHPCMS_PATH', dirname(__FILE__).'/../');
if(!defined('IN_PHPCMS')) include PHPCMS_PATH.'/phpcms/base.php';

define('UC_KEY', pc_base::load_config('system', 'uc_key'));

if(UC_KEY=='' || UCUSE==0){
	exit('please check uc config!');
}

define('API_RETURN_SUCCEED', '1');
define('API_RETURN_FAILED', '-1');
define('API_RETURN_FORBIDDEN', '-2');

$get = $post = array();

$code = @$_GET['code'];

if(time() - $get['time'] > 3600) 
	exit('Authracation has expiried');

include dirname(__FILE__).'/uc_client/lib/xml.class.php';
$post = unserialize(file_get_contents('php://input'));


$action = $get['action'];

?>