<?php
class member_point_model extends model {
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'member_point';
		parent::__construct();
	}
}
?>