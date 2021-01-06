<?php
defined('IN_PHPCMS') or exit('No permission resources.');

class comment_check_model extends model {
	public $table_name;
	public $old_table_name;
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'comment';
		$this->table_name = $this->old_table_name = 'comment_check';
		parent::__construct();
	}
}
?>