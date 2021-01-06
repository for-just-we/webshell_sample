<?php
class form {
	public function radio($array = array(), $id = 0, $str = '', $width = 0, $field = '') {
		$string = '';
		foreach($array as $key=>$value) {
			$checked = trim($id)==trim($key) ? 'checked' : '';
			if($width) $string .= '<label class="ib" style="width:'.$width.'px">';
			$string .= '<input type="radio" '.$str.' id="'.$field.'_'.new_html_special_chars($key).'" '.$checked.' value="'.$key.'"> '.$value;
			if($width) $string .= '</label>';
		}
		return $string;
	}
}
?>