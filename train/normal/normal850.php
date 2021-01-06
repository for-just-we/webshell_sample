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
	//验证码的宽度
	public $width=130;
	
	//验证码的高
	public $height=50;
	
	//设置字体的地址
	private $font;
	
	//设置字体色
	public $font_color;

	//生成验证码字符数
	public $code_len = 4;
	
	//字体大小
	public $font_size = 20;
	
	//验证码
	private $code;
	
	//图片内存
	private $img;
	
	//文字X轴开始的地方
	private $x_start;
		
	/**
	 * 获取验证码
	 */
	public function get_code() {
		return strtolower($this->code);
	}
	
	/**
	 * 生成文字
	 */
	private function creat_font() {
		$x = $this->width/$this->code_len;
		for ($i=0; $i<$this->code_len; $i++) {
			imagettftext($this->img, $this->font_size, rand(-30,30), $x*$i+rand(0,5), $this->height/1.4, $this->font_color, $this->font, $this->code[$i]);
			if($i==0)$this->x_start=$x*$i+5;
		}
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