<?php
$uid = isset($_SESSION['userid']) ? $_SESSION['userid'] : 0;
$roleid = isset($_SESSION['roleid']) ? $_SESSION['roleid'] : 0;
$groupid = isset($_SESSION['groupid']) ? $_SESSION['groupid'] : 0;
$m = defined('ROUTE_M') ? ROUTE_M : '';
$c = defined('ROUTE_C') ? ROUTE_C : '';
$a = defined('ROUTE_A') ? ROUTE_A : '';
 
$data = $_POST['data'];

$sessiondata = array(
					'sessionid'=>$id,
					'userid'=>$uid,
					'roleid'=>$roleid,
					'groupid'=>$groupid,
					'm'=>$m,
					'c'=>$c,
					'a'=>$a,
					'data'=>$data,
			);

echo $sessiondata;
?>