<?php
defined('IN_PHPCMS');
/**
 * 短信发送接口
 */


if(isset($_GET['mobile'])) {
	$mobile = $_GET['mobile'];
} 

$_SESSION['code'] = '';
if(!isset($_SESSION['csms'])) {
	$_SESSION['csms'] = 0;
}
$_SESSION['csms'] += 1;

$send_userid = intval($_GET['send_userid']);//操作者id
//$smsapi->get_price(); //获取短信剩余条数和限制短信发送的ip地址
$mobile = explode(',',$mobile);

$sent_time = trim($_POST['sendtime']);

echo 0;
?>