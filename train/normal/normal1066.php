<?php
class format {
	/**
	 * 日期格式化
	 * 
	 * @param $timestamp
	 * @param $showtime
	 */
	public function date($timestamp, $showtime = 0) {
		$times = intval($timestamp);
		if(!$times) return true;
		$lang = pc_base::load_config('system','lang');
		$str = $showtime ? date('m/d/Y H:i:s',$times) : date('m/d/Y',$times);
		return $str;
	}
	
	/**
	 * 获取当前星期
	 * 
	 * @param $timestamp
	 */
	public function week($timestamp) {
		$times = intval($timestamp);
		if(!$times) 
			return true;
		$weekarray = array(L('Sunday'),L('Monday'),L('Tuesday'),L('Wednesday'),L('Thursday'),L('Friday'),L('Saturday')); 
		return $weekarray[date("w",$timestamp)]; 
	}
}
?>