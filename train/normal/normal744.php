<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);

class badword extends admin {
	function __construct() {
		$admin_username = param::get_cookie('admin_username');
		$userid = $_SESSION['userid'];
		$this->db = pc_base::load_model('badword_model');
		parent::__construct();
	}
	
	
	public function public_name() {
			$badword = isset($_GET['badword']) && trim($_GET['badword']) ? (pc_base::load_config('system', 'charset') == 'gbk' ? iconv('utf-8', 'gbk', trim($_GET['badword'])) : trim($_GET['badword'])) : exit('0');
			$badid = isset($_GET['badid']) && intval($_GET['badid']) ? intval($_GET['badid']) : '';
	 		$data = array();
			if ($badid) {
				$data = $this->db->get_one(array('badid'=>$badid), 'badword');
				if (!empty($data) && $data['badword'] == $badword) {
					exit('1');
				}
			}
			if ($this->db->get_one(array('badword'=>$badword), 'badid')) {
				exit('0');
			} else {
				exit('1');
			}
		}	
}
?>