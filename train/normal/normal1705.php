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

	/**
	 * 通知应用
	 */
	public static function notice($operation, $noticedata, $noticeid) {
		$db = self::get_db();
		$applist = getcache('applist', 'admin');
		foreach($applist as $k=>$v) {
			//由于编码转换会改变notice_send的值，所以每次循环需要重新赋值noticedate_send
			$noticedata_send = $noticedata;
			
			//应用添加用户时不重复通知该应用
			if(isset($noticedata_send['appname'])) {
				$appstatus[$k] = 1;
				continue;
			}
			
			$url = $v['url'].$v['apifilename'];

			if (CHARSET != $v['charset'] && isset($noticedata_send['action'])) {
					$noticedata_send['username'] = iconv(CHARSET, $v['charset'], $noticedata_send['username']);
			}
			$tmp_s = strstr($url, '?') ? '&' : '?';
			$status = ps_send($url.$tmp_s.'appid='.$k, $noticedata_send, $v['authkey']);
			if ($status == 1) {
				$appstatus[$k] = 1;
			} else {
				$appstatus[$k] = 0;
			}
		}

		$db->update(array('totalnum'=>'+=1', 'appstatus'=>json_encode($appstatus)), array('id'=>$noticeid));
	}
}
?>