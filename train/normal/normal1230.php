<?php
defined('IN_PHPCMS');
class link_model extends model {
	function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'link';
		parent::__construct();
	} 
}
?>