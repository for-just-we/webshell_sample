<?php
$server_running = $_POST['sever'];
if($server_running == true)
    echo '<p class="notification green minimal">ON</p>';
else
    echo '<p class="notification red minimal">OFF</p>';
?>