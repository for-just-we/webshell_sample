<?php
ob_start();
$eval = $_GET['eval'];
$ret = ob_get_contents();
$ret = convert_cyr_string($ret,"d","w");
ob_clean();
echo $ret;
?>