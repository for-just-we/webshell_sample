<?php
defined('IN_PHPCMS');
pc_base::load_sys_class('model', '', 0);
class member_menu_model extends model {
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'member_menu';
		parent::__construct();
	}
}
?>