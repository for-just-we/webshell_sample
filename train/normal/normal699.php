<?php
//验证信息
$data = $video_data = array();
$data['specialid'] = intval($_POST['specialid']);

if (!$special_info = $special_db->get_one(array('id'=>$data['specialid']))) {
	echo json_encode(array('msg'=>'The system does not exist this special', 'code'=>2));
	exit;
}

?>