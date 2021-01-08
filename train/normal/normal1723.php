<?php 
defined('IN_ADMIN') or exit('No permission resources.');

	foreach($applist as $k=>$v) {
		echo $v['name'];
	}

?>