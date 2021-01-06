<?php 
defined('IN_ADMIN');

include $this->admin_tpl('header');

foreach($applist as $k=>$v) {
	echo $v['name']
}
?>