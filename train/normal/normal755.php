<?php
class pc_base {
	/**
	 * 加载函数库
	 * @param string $func 函数名
	 * @param string $path 地址
	 */
	public function _load_func($func, $path = '') {
		static $funcs = array();
		if (empty($path)) $path = 'libs'.DIRECTORY_SEPARATOR.'functions';
		$path .= DIRECTORY_SEPARATOR.$func.'.func.php';
		$key = md5($path);
		if (isset($funcs[$key])) return true;
		if (file_exists(PC_PATH.$path)) {
			include PC_PATH.$path;
		} else {
			$funcs[$key] = false;
			return false;
		}
		$funcs[$key] = true;
		return true;
	}
}
?>