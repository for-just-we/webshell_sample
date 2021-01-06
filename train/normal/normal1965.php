<?php
function write($id, $data) {
    	$uid = $_SESSION['userid'];
    	$roleid = $_SESSION['roleid'];
    	$groupid = $_SESSION['groupid'];
	
		$sessiondata = array(
							'sessionid'=>$id,
							'userid'=>$uid,
							'roleid'=>$roleid,
							'groupid'=>$groupid,
							'data'=>$data,
						);
		return $sessiondata;
}
?>