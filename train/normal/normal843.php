<?php
defined('IN_PHPCMS') or exit('No permission resources.');

class category_priv_model extends model {
	function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'category_priv';
		parent::__construct();
	}
}
?>