<?php
//验证信息
$data = $video_data = array();

$data['specialid'] = intval($_POST['specialid']);
if (!$data['specialid']) {
	echo json_encode(array('msg'=>'Specialid do not empty', 'code'=>'1'));
	exit;
} 
?>