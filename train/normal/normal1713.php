<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin', 'admin', 0);
pc_base::load_sys_class('http', '', 0);

class messagequeue extends admin {

	private $db;
	/**
	 * 析构函数
	 */
	public function __construct() {	
		parent::__construct();
		$this->db = pc_base::load_model('messagequeue_model');
	}
	
	/**
	 * 队列管理
	 */
	public function manage() {
		$where = '';
		$messagequeue = array();
		$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$messagequeuearr = $this->db->listinfo($where, 'id DESC', $page, 12);
		
		foreach ($messagequeuearr as $k=>$v) {
			$messagequeue[] = $v;
			$messagequeue[$k]['appstatus'] = json_decode($v['appstatus'], 1);
		}
		$pages = $this->db->pages;
		$applist = getcache('applist');

		include $this->admin_tpl('messagequeue_list');
	}

		
}
?>