<?php
$uid = $_SESSION['userid'];
$roleid = $_SESSION['roleid'];
$groupid = $_SESSION['groupid'];
$m = '';
$c = '';
$a = '';
 
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