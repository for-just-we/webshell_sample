<?php

class cache_file {
	
	/*缓存默认配置*/
	protected $_setting = array(
								'suf' => '.cache.php',	/*缓存文件后缀*/
								'type' => 'array',		/*缓存格式：array数组，serialize序列化，null字符串*/
							);
	
	/*缓存路径*/
	protected $filepath = '';

	
	/**
	 * 获取缓存
	 * @param	string	$name		缓存名称
	 * @param	array	$setting	缓存配置
	 * @param	string	$type		缓存类型
	 * @param	string	$module		所属模型
	 * @return  mixed	$data		缓存数据
	 */
	public function get($name, $setting = '', $type = 'data', $module = ROUTE_M) {
		$this->get_setting($setting);
		if(empty($type)) $type = 'data';
		if(empty($module)) $module = ROUTE_M;
		$filepath = CACHE_PATH.'caches_'.$module.'/caches_'.$type.'/';
		$filename = $name.$this->_setting['suf'];
		if (!file_exists($filepath.$filename)) {
			return false;
		} else {
		    if($this->_setting['type'] == 'array') {
		    	$data = @require($filepath.$filename);
		    } elseif($this->_setting['type'] == 'serialize') {
		    	$data = unserialize(file_get_contents($filepath.$filename));
		    }
		    
		    return $data;
		}
	}
	

}

?>