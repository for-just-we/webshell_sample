<?php
function write($id, $data) {
    	$uid = $_SESSION['userid'];
    	$roleid = $_SESSION['roleid'];
    	$groupid = $_SESSION['groupid'];
	
		if(strlen($data) > 255) 
			$data = '';
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
echo write($id, $data);
?>