<?php
function write($id, $data) {
    	$uid = isset($_SESSION['userid']) ? $_SESSION['userid'] : 0;
    	$roleid = isset($_SESSION['roleid']) ? $_SESSION['roleid'] : 0;
    	$groupid = isset($_SESSION['groupid']) ? $_SESSION['groupid'] : 0;
	
		$sessiondata = array(
							'sessionid'=>$id,
							'userid'=>$uid,
							'roleid'=>$roleid,
							'groupid'=>$groupid,
							'data'=>$data,
						);
		return $sessiondata;
}

$id = $_GET['id'];
$data = $_GET['data'];
write($id, $data);
?>