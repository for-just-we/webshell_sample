<?php
class ftps {
	//错误代码
	private $err_code = 0;

	
	public function get_error() {
		if (!$this->err_code) 
			return false;
		$err_msg = array(
			'1'=>'Server can not connect',
			'2'=>'Not connect to server',
			'3'=>'Can not delete non-empty folder',
			'4'=>'Can not delete file',
			'5'=>'Can not get file list',
			'6'=>'Can not change the current directory on the server',
			'7'=>'Can not upload files'
		);
		return $err_msg[$this->err_code];
	}
}
?>