<?php 
$setting = $_POST['setting'];
if(isset($setting['template_list']) && !empty($setting['template_list'])) 
	echo "load_file_list('".$setting['template_list']."')";
?>
