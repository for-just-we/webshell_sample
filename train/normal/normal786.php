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
	 * 当前缓存工厂类静态实例
	 */
	private static $cache_factory;
	
	/**
	 * 缓存配置列表
	 */
	protected $cache_config = array();
	
	
	/**
	 * 返回当前终级类对象的实例
	 * @param $cache_config 缓存配置
	 * @return object
	 */
	public static function get_instance($cache_config = '') {

		if(cache_factory::$cache_factory == '' || $cache_config !='') {
			cache_factory::$cache_factory = new cache_factory();
			if(!empty($cache_config)) {
				cache_factory::$cache_factory->cache_config = $cache_config;
			}
		}
		return cache_factory::$cache_factory;
	}
	
	
}
?>