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
	//设置背景色
	public $background = '#EDF7FF';
	
	//生成验证码字符数
	public $code_len = 4;
	
	//验证码
	private $code;
	
	//图片内存
	private $img;


	/**
	 * 获取验证码
	 */
	public function get_code() {
		return strtolower($this->code);
	}
	
	
	/**
	 * 输出图片
	 */
	private function output() {
		header("content-type:image/png\r\n");
		imagepng($this->img);
		imagedestroy($this->img);
	}
}
?>