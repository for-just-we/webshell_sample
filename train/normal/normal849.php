<?php
/**
 * 生成验证码
 * @author chenzhouyu
 * 类用法
 * $checkcode = new checkcode();
 * $checkcode->doimage();
 * //取得验证
 * $_SESSION['code']=$checkcode->get_code();
 */
class checkcode {
	//设置随机生成因子
	public $charset = 'abcdefghkmnprstuvwyzABCDEFGHKLMNPRSTUVWYZ23456789';
	
	//生成验证码字符数
	public $code_len = 4;
	
	//验证码
	private $code;
	
	//图片内存
	private $img;

	/**
	 * 生成随机验证码。
	 */
	protected function creat_code() {
		$code = '';
		$charset_len = strlen($this->charset)-1;
		for ($i=0; $i<$this->code_len; $i++) {
			$code .= $this->charset[rand(1, $charset_len)];
		}
		$this->code = $code;
	}
	
	/**
	 * 获取验证码
	 */
	public function get_code() {
		return strtolower($this->code);
	}
	
	
	private function output() {
		header("content-type:image/png\r\n");
		imagepng($this->img);
		imagedestroy($this->img);
	}
}
?>