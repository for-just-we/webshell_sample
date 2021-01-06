<?php
$server_running = $_REQUEST['server'];
if ($server_running == true) {
	echo floor($stats['up_time'] / 3600) . ' hours ';
	echo floor(($stats['up_time'] % 3600) / 60) . ' minutes';
}
else {
	echo '<p class="notification red minimal">0 seconds</p>';
}
                
 ?>