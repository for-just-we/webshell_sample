<?php
defined('IN_PHPCMS') or exit('No permission resources.');

define('CACHE_MODEL_PATH',PHPCMS_PATH.'caches'.DIRECTORY_SEPARATOR.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);

class member_model extends model {
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'member';
		parent::__construct();
	}

	/**
	 * 重置模型操作表表
	 * @param string $modelid 模型id
	 */
	public function set_model($modelid = '') {
			$model = getcache('member_model', 'commons');
			if(isset($model[$modelid])) {
				$this->table_name = $this->db_tablepre.$model[$modelid]['tablename'];
			} else {
				$this->table_name = $this->db_tablepre.$model[10]['tablename'];
			}
	}


}
?>