<?php
defined('IN_PHPCMS');

class template_bak_model extends model {
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'template_bak';
		parent::__construct();
	}
}
?>