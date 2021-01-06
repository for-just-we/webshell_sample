<?php

if(empty($_SESSION['code'])) 
	exit('-100');
if(empty($_GET['session_code']) || preg_match('/^([a-z0-9])$/i',$_GET['session_code']) || $_SESSION['code']!=$_GET['session_code']) 
	exit('-101');

if(isset($_GET['mobile'])) {
	$mobile = $_GET['mobile'];
} else {
	$mobile = $_SESSION['mobile'];
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