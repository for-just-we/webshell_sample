<?php

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

	public function ajax_clear() {
		/*写入应用列表缓存*/
		$applist = $this->applications_db->listinfo('', '', 1, 100,'appid');
		setcache('applist', $applist);
		
		$applistinfo = getcacheinfo('applist');

		$return['filesize'] = sizecount($applistinfo['filesize']);
		$return['filemtime'] = date('Y-m-d H:i:s', $applistinfo['filemtime']);

		exit(json_encode($return));
	}
}
?>