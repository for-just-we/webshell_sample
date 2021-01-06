<?php
$server_running = $_REQUEST['server'];
if ($server_running == true) {
	echo floor($stats['up_time'] / 60) . ' minutes ';
	echo ($stats['up_time'] % 60) . ' seconds';
}
else {
	echo '<p class="notification red minimal">0 seconds</p>';
}
                
 ?>