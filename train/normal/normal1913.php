<?php
defined('IN_PHPCMS');

class search_keyword_model extends model {
	public $table_name = '';
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'search_keyword';
		parent::__construct();
	}
}
?>