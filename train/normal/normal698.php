<?php
//验证信息
$data = $video_data = array();

$data['specialid'] = intval($_POST['specialid']);
$data['title'] = $video_data['title'] = safe_replace($_POST['title']);
if (!$data['title']) {
	echo json_encode(array('msg'=>'Video\'s title not empty', 'code'=>3));
	exit;
}
?>