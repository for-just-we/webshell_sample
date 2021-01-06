<?php
defined('IN_PHPCMS') or exit('No permission resources.');

class admin_role_model extends model {
	public $table_name = '';
	function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'admin_role';
		parent::__construct();
	}
}
?>