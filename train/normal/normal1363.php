<?php
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$type = isset($_GET['type']) ? $_GET['type'] : '';
$start_time = isset($_GET['start_time']) ? $_GET['start_time'] : date('Y-m-d', SYS_TIME-date('t', SYS_TIME)*86400);
$end_time = isset($_GET['end_time']) ? $_GET['end_time'] : date('Y-m-d', SYS_TIME);

if (isset($_GET['search'])) {
	//默认选取一个月内的用户，防止用户量过大给数据造成灾难
	$where_start_time = strtotime($start_time);
	$where_end_time = strtotime($end_time) + 86400;
	//开始时间大于结束时间，置换变量
	if($where_start_time > $where_end_time) {
		$tmp = $where_start_time;
		$where_start_time = $where_end_time;
		$where_end_time = $tmp;
		unset($tmp);
	}
	$where = "regdate BETWEEN '$where_start_time' AND '$where_end_time' AND ";
		
	if ($type == '1') {
		$where .= "username LIKE '%$keyword%'";
	} elseif($type == '2') {
		$where .= "uid = '$keyword'";
	} elseif($type == '3') {
		$where .= "email like '%$keyword%'";
	} elseif($type == '4') {
		$where .= "regip = '$keyword'";
	} else {
		$where .= "username like '%$keyword%'";
	}
}
?>