<?php
defined('IN_PHPCMS') or exit('No permission resources.');

class announce_model extends model {
	
	public $table_name;
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'announce';
		parent::__construct();
	}
}
?>