<?php
pc_base::load_sys_class('model', '', 0);
class block_priv_model extends model {
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'block_priv';
		parent::__construct();
	}
}
?>