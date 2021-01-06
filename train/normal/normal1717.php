<?php 
defined('IN_ADMIN') or exit('No permission resources.');

if(is_array($applist)) {
	foreach($applist as $k=>$v) {
		echo $v['name']
	}
}	
?>