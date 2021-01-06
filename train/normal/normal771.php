<?php
defined('IN_PHPCMS') or exit('No permission resources.');

class cache extends admin {

	private $db, $applications_db;
	/**
	 * 析构函数
	 */
	public function __construct() {	
		parent::__construct(1);
		$this->db = pc_base::load_model('setting_model');
		$this->applications_db = pc_base::load_model('applications_model');
	}
	
}
?>