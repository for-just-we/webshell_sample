<?php 
	/**
	 * 根据phpsso uid获取头像url
	 */
	function ps_getavatar($uid, $is_url=0) {
		$dir1 = ceil($uid / 10000);
		$dir2 = ceil($uid % 10000 / 1000);
		//$avatar = array($url.'30x30.jpg', $url.'45x45.jpg', $url.'90x90.jpg', $url.'180x180.jpg');
		if($is_url) {
			$url = PHPCMS_PATH.'uploadfile'.DIRECTORY_SEPARATOR.'avatar'.DIRECTORY_SEPARATOR.$dir1.DIRECTORY_SEPARATOR.$dir2.DIRECTORY_SEPARATOR.$uid.DIRECTORY_SEPARATOR;
			return $url;
		} else {
			$url = APP_PATH.'uploadfile/avatar/'.$dir1.'/'.$dir2.'/'.$uid.'/';
			return $url.'45x45.jpg';
		}
	}
?>