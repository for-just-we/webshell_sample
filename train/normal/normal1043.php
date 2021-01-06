<?php
class form {
	public static function urlrule($module, $file, $ishtml, $id, $str = '', $default_option = '') {
		if(!$module) $module = 'content';
		$urlrules = getcache('urlrules_detail','commons');
		$array = array();
		foreach($urlrules as $roleid=>$rules) {
			if($rules['module'] == $module && $rules['file']==$file && $rules['ishtml']==$ishtml) $array[$roleid] = $rules['example'];
		}
		
		return form::select($array, $id,$str,$default_option);
	}
}
?>