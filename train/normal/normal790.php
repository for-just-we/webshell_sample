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
	 * 写入缓存
	 * @param	string	$name		缓存名称
	 * @param	mixed	$data		缓存数据
	 * @param	array	$setting	缓存配置
	 * @param	string	$type		缓存类型
	 * @param	string	$module		所属模型
	 * @return  mixed				缓存路径/false
	 */

	public function set($name, $data, $setting = '', $type = 'data', $module = ROUTE_M) {
		$this->get_setting($setting);
		if(empty($type)) $type = 'data';
		if(empty($module)) $module = ROUTE_M;
		$filepath = CACHE_PATH.'caches_'.$module.'/caches_'.$type.'/';
		$filename = $name.$this->_setting['suf'];
	    if(!is_dir($filepath)) {
			mkdir($filepath, 0777, true);
	    }
	    
	    if($this->_setting['type'] == 'array') {
	    	$data = "<?php\nreturn ".var_export($data, true).";\n?>";
	    } elseif($this->_setting['type'] == 'serialize') {
	    	$data = serialize($data);
	    }
	    if ($module == 'commons' || ($module == 'commons' && substr($name, 0, 16) != 'category_content')) {
		    $db = pc_base::load_model('cache_model');
		    $datas = new_addslashes($data);
		    if ($db->get_one(array('filename'=>$filename, 'path'=>'caches_'.$module.'/caches_'.$type.'/'), '`filename`')) {
		    	$db->update(array('data'=>$datas), array('filename'=>$filename, 'path'=>'caches_'.$module.'/caches_'.$type.'/'));
		    } else {
		    	$db->insert(array('filename'=>$filename, 'path'=>'caches_'.$module.'/caches_'.$type.'/', 'data'=>$datas));
		    }
	    }
	    
	    //是否开启互斥锁
		if(pc_base::load_config('system', 'lock_ex')) {
			$file_size = file_put_contents($filepath.$filename, $data, LOCK_EX);
		} else {
			$file_size = file_put_contents($filepath.$filename, $data);
		}
	    
	    return $file_size ? $file_size : 'false';
	}
}

?>