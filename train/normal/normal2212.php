<?php
defined('IN_PHPCMS');

class sso_members_model extends model {
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'sso_members';
		parent::__construct();
	}
}
?>