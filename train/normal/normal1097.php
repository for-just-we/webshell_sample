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
	
	public function chdir($dirname) {
		if (!$this->link) {
			$this->err_code = 2;
			return false;
		} 
		if (@ftp_chdir($this->link, $dirname)) {
			return true;
		} else {
			$this->err_code = 6;
			return false;
		}
	}
}
?>