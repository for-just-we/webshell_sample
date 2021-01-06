<?php
class form {
	public function select_template($style, $module, $id = '', $str = '', $pre = '') {
		$tpl_root = pc_base::load_config('system', 'tpl_root');
		$templatedir = PC_PATH.$tpl_root.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR;
		$confing_path = PC_PATH.$tpl_root.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.'config.php';
		$localdir = str_replace(array('/', '\\'), '', $tpl_root).'|'.$style.'|'.$module;
		$templates = glob($templatedir.$pre.'*.html');
		if(empty($templates)) {
			$style = 'default';
			$templatedir = PC_PATH.$tpl_root.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR;
			$confing_path = PC_PATH.$tpl_root.DIRECTORY_SEPARATOR.$style.DIRECTORY_SEPARATOR.'config.php';
			$localdir = str_replace(array('/', '\\'), '', $tpl_root).'|'.$style.'|'.$module;
			$templates = glob($templatedir.$pre.'*.html');
		}
		if(empty($templates)) return false;
		$files = @array_map('basename', $templates);
		$names = array();
		if(file_exists($confing_path)) {
			$names = include $confing_path;
		}
		$templates = array();
		if(is_array($files)) {
			foreach($files as $file) {
				$key = substr($file, 0, -5);
				$templates[$key] = isset($names['file_explan'][$localdir][$file]) && !empty($names['file_explan'][$localdir][$file]) ? $names['file_explan'][$localdir][$file].'('.$file.')' : $file;
			}
		}
		ksort($templates);
		return self::select($templates, $id, $str,L('please_select'));
	}
}
?>