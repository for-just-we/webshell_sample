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
	
	public function rmdir($dirname, $enforce = false) {
		$list = $this->nlist($dirname);
		if ($list && $enforce) {
			$this->chdir($dirname);
			foreach ($list as $v) {
				$this->f_delete($v);
			}
		} elseif ($list && !$enforce) {
			$this->err_code = 3;
			return false;
		}
		@ftp_rmdir($this->link, $dirname);
		return true;
	}
}
?>