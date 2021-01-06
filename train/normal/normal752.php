<?php
function load_config($file, $key = '', $default = '', $reload = false) {
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

?>