<?php
class form {
	public function images($name, $id = '', $value = '', $moudle='', $catid='', $size = 50, $class = '', $ext = '', $alowexts = '',$thumb_setting = array(),$watermark_setting = 0 ) {
		if(!$id) 
			$id = $name;
		if(!empty($thumb_setting)) 
			$thumb_ext = $thumb_setting[0].','.$thumb_setting[1];
		else $thumb_ext = ',';
		if(!$alowexts) 
			$alowexts = 'jpg|jpeg|gif|bmp|png';
		if(!defined('IMAGES_INIT')) {
			$str = '<script type="text/javascript" src="'.JS_PATH.'swfupload/swf2ckeditor.js"></script>';
			define('IMAGES_INIT', 1);
		}
		return $str;
	}
}
?>