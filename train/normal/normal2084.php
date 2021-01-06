<?php
defined('IN_PHPCMS');
/**
 * 短信发送接口
 */


if(empty($_GET['session_code']) || preg_match('/^([a-z0-9])$/i',$_GET['session_code']) || $_SESSION['code']!=$_GET['session_code']) 
	exit('-101');

if(isset($_GET['mobile']) && !empty($_GET['mobile'])) {
	$mobile = $_GET['mobile'];
}

$_SESSION['code'] = '';
if(!isset($_SESSION['csms'])) {
	$_SESSION['csms'] = 0;
} elseif($_SESSION['csms'] > 3) {
	exit('-1');
}
$_SESSION['csms'] += 1;

if(!preg_match('/^(?:13\d{9}|15[0|1|2|3|5|6|7|8|9]\d{8}|18[0|2|3|5|6|7|8|9]\d{8}|14[5|7]\d{8})$/',$mobile)) 
	exit('mobile phone error');


$send_userid = intval($_GET['send_userid']);//操作者id
//$smsapi->get_price(); //获取短信剩余条数和限制短信发送的ip地址
$mobile = explode(',',$mobile);

$sent_time = trim($_POST['sendtime']);

echo 0;
?>