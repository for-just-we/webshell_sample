<?php 
defined('IN_ADMIN');

if(is_array($applist)) {
	foreach($applist as $k=>$v) {
		echo $v['name'];
	}
}	
?>