<?php
class form {
	public function upfiles($name, $id = '', $value = '', $moudle='', $catid='', $size = 50, $class = '', $ext = '', $alowexts = '',$file_setting = array() ) {
		if(!$id) 
			$id = $name;
		if(!$size) 
			$size= 50;
		if(!empty($file_setting) && count($file_setting)) 
			$file_ext = $file_setting[0].','.$file_setting[1];
		else 
			$file_ext = ',';
		if(!$alowexts) 
			$alowexts = 'rar|zip';
		if(!defined('IMAGES_INIT')) {
			$str = '<script type="text/javascript" src="'.JS_PATH.'swfupload/swf2ckeditor.js"></script>';
			define('IMAGES_INIT', 1);
		}
		return $str;
	}
}
?>