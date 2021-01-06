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
	
	public function put($remote, $local) {
		if (!$this->link) {
			$this->err_code = 2;
			return false;
		} 
		$dirname = pathinfo($remote,PATHINFO_DIRNAME);
		if (!$this->chdir($dirname)) {
			$this->mkdir($dirname);
		}
		@ftp_put($this->link, $remote, $local, $this->mode);
		return true;
		
	}
}
?>