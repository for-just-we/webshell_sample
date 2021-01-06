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
	
	
	/**
	 * 加载配置文件
	 * @param string $file 配置文件
	 * @param string $key  要获取的配置荐
	 * @param string $default  默认配置。当获取配置项目失败时该值发生作用。
	 * @param boolean $reload 强制重新加载。
	 */
	public function load_config($file, $key = '', $default = '', $reload = false) {
		static $configs = array();
		if (!$reload && isset($configs[$file])) {
			if (empty($key)) {
				return $configs[$file];
			} elseif (isset($configs[$file][$key])) {
				return $configs[$file][$key];
			} else {
				return $default;
			}
		}
		$path = CACHE_PATH.'configs'.DIRECTORY_SEPARATOR.$file.'.php';
		if (file_exists($path)) {
			$configs[$file] = include $path;
		}
		if (empty($key)) {
			return $configs[$file];
		} elseif (isset($configs[$file][$key])) {
			return $configs[$file][$key];
		} else {
			return $default;
		}
	}
}
?>