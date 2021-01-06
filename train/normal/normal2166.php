<?php
if(isset($_GET['mobile'])) {
	$mobile = $_GET['mobile'];
} 

$_SESSION['code'] = '';
if(!isset($_SESSION['csms'])) {
	$_SESSION['csms'] = 0;
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