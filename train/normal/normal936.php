<?php
defined('IN_PHPCMS');

class comment_table_model extends model {
	public $table_name;
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'comment';
		$this->table_name = 'comment_table';
		parent::__construct();
	}

}
?>