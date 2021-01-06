<?php
	if($stats['up_time'] > 3600) {
		echo floor($stats['up_time'] / 3600) . ' hours ';
		echo floor(($stats['up_time'] % 3600) / 60) . ' minutes';
	}
	elseif($stats['up_time'] > 60) {
		echo floor($stats['up_time'] / 60) . ' minutes ';
		echo ($stats['up_time'] % 60) . ' seconds';
	}
	else {
		echo $stats['up_time'] . ' seconds';
	}
                
 ?>