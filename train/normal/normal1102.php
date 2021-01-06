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
	
	public function connect($host, $username = '', $password = '', $port = '21', $pasv = false, $ssl = false, $timeout = 30) {
		$start = time();
	
		if (!$this->link = @ftp_ssl_connect($host, $port, $timeout)) {
			$this->err_code = 1;
			return false;
		}
		
		if (@ftp_login($this->link, $username, $password)) {
			if ($pasv) ftp_pasv($this->link, true);
			$this->link_time = time()-$start;
		   return true;
		} else {
			$this->err_code = 1;
		   return false;
		}
		register_shutdown_function(array(&$this,'close'));
	}
}
?>