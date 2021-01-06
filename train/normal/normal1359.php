<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header');
$n=1; 
foreach ($menu as $key=>$v){
	if ($v['name']=='phpsso') 
		continue;

	$n++; 
}
?>
