<?php
defined('IN_PHPCMS');

class site_model extends model {
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'site';
		parent::__construct();
	}
}
?>