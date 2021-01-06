<?php

class messagequeue {
	
	private $db;
	
	private static function get_db() {
		return pc_base::load_model('messagequeue_model');
	}
	
	/**
	 * 添加队列信息
	 */
	public static function add($operation, $noticedata_send) {
		$db = self::get_db();
		$noticedata_send['action'] = $operation;
		$noticedata_send_string = array2string($noticedata_send);
		
		if ($noticeid = $db->insert(array('operation'=>$operation, 'noticedata'=>$noticedata_send_string, 'dateline'=>SYS_TIME), 1)) {
			self::notice($operation, $noticedata_send, $noticeid);
			return 1;
		} else {
			return 0;
		}
	}
}
?>