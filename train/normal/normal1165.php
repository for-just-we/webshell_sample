<?php 	
	/**
	 * 过滤字符串
	 * @param $string
	 */
	function ps_stripslashes($string) {
		!defined('MAGIC_QUOTES_GPC') && define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());
		if(MAGIC_QUOTES_GPC) {
			return stripslashes($string);
		} else {
			return $string;
		}
	}
	
	echo ps_stripslashes($_POST['str']);
?>