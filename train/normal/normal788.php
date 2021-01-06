<?php
/**
 *  cache_factory.class.php 缓存工厂类
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */

class cache_factory {

	/**
	 * 缓存配置列表
	 */
	protected $cache_config = array();
	

	/**
	 *  加载缓存驱动
	 * @param $cache_name 	缓存配置名称
	 * @return object
	 */
	public function load($cache_name) {
		$object = null;
		if(isset($this->cache_config[$cache_name]['type'])) {
			switch($this->cache_config[$cache_name]['type']) {
				case 'file' :
					$object = pc_base::load_sys_class('cache_file');
					break;
				case 'memcache' :
					define('MEMCACHE_HOST', $this->cache_config[$cache_name]['hostname']);
					define('MEMCACHE_PORT', $this->cache_config[$cache_name]['port']);
					define('MEMCACHE_TIMEOUT', $this->cache_config[$cache_name]['timeout']);
					define('MEMCACHE_DEBUG', $this->cache_config[$cache_name]['debug']);
					
					$object = pc_base::load_sys_class('cache_memcache');
					break;
				case 'apc' :
					$object = pc_base::load_sys_class('cache_apc');
					break;
				default :
					$object = pc_base::load_sys_class('cache_file');
			}
		} else {
			$object = pc_base::load_sys_class('cache_file');
		}
		return $object;
	}

}
?>