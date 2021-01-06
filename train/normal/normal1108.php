<?php
class ftps {
	//FTP 连接资源
	private $link;
	//FTP连接时间
	public $link_time;
	//错误代码
	private $err_code = 0;
	//传送模式{文本模式:FTP_ASCII, 二进制模式:FTP_BINARY}
	public $mode = FTP_BINARY;
	
	public function get_error() {
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