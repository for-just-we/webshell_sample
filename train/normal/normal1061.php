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
		if($lang == 'zh-cn') {
			$str = $showtime ? date('Y-m-d H:i:s',$times) : date('Y-m-d',$times);
		} else {
			$str = $showtime ? date('m/d/Y H:i:s',$times) : date('m/d/Y',$times);
		}
		return $str;
	}
}
?>