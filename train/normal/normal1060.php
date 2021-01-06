<?php
class format {
	/**
	 * 获取当前星期
	 * 
	 * @param $timestamp
	 */
	public static function week($timestamp) {
		$times = intval($timestamp);
		if(!$times) 
			return true;
		$weekarray = array(L('Sunday'),L('Monday'),L('Tuesday'),L('Wednesday'),L('Thursday'),L('Friday'),L('Saturday')); 
		return $weekarray[date("w",$timestamp)]; 
	}
}
?>