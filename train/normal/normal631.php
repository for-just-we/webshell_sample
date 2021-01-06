<?php
$server_running = $_REQUEST['server'];
if ($server_running == true) {
	echo $stats['up_time'] . ' seconds';
}
else {
	echo '<p class="notification red minimal">0 seconds</p>';
}
                
 ?>