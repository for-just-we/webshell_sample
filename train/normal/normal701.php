<?php
$data = $video_data = array();

$data['title'] = $video_data['title'] = safe_replace($_POST['title']);
if (!$data['title']) {
	echo json_encode(array('msg'=>'Video\'s title not empty', 'code'=>3));
	exit;
}
$content = $_POST['desc'] ? addslashes($_POST['desc']) : '';
$data['description'] = $video_data['description'] = substr($content, 0, 255);
$data['keywords'] = $video_data['keywords'] = $_POST['tag'] ? addslashes($_POST['tag']) : '';
$vid = $video_data['vid'] = $_POST['vid'];
if (!$vid) {
	echo json_encode(array('msg'=>'Vid do not empty', 'code'=>4));
	exit;
}

?>