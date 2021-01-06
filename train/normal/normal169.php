<?php
function s_array($array) {
	return is_array($array) ? array_map('s_array', $array) : stripslashes($array);
}

echo s_array(array('',''));
?>